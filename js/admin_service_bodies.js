jQuery(document).ready(function ($) {

  function clear_notices() {
    jQuery(".notice-dismiss").each(function (i, e) {
      dismiss_notice(e);
    });
  }

  function notice_success(response) {
    var msg = "";
    if (response.message == "")
      msg =
        '<div class="notice notice-success is-dismissible"><p><strong>SUCCESS: </strong><button type="button" class="notice-dismiss" onclick="javascript: return dismiss_notice(this);"></button></div>';
    else
      msg =
        '<div class="notice notice-success is-dismissible"><p><strong>SUCCESS: </strong>' +
        response.message +
        '.</p><button type="button" class="notice-dismiss" onclick="javascript: return dismiss_notice(this);"></button></div>';
    $(".wp-header-end").after(msg);
  }

  function notice_error(xhr) {
    $(".wp-header-end").after(
      '<div class="notice notice-error is-dismissible"><p><strong>ERROR: </strong>' +
        xhr.responseJSON.message +
        '.</p><button type="button" class="notice-dismiss" onclick="javascript: return dismiss_notice(this);"></button></div>'
    );
  }

  function attach_select_options_for_sbid(sblist, userlist, sbid, selectid) {
    Object.keys(userlist).forEach((item) => {
      var wp_uid = userlist[item]["id"];
      var username = userlist[item]["slug"];
      var membership = sblist[sbid]["membership"];
      var selected = false;
      if (membership.includes(wp_uid)) {
        selected = true;
      }
      var opt = new Option(username, wp_uid, false, selected);
      $(selectid).append(opt);
      // console.log(opt);
    });
    $(selectid).trigger("change");
  }

  function turn_off_spinner(element) {
    $(element).removeClass("is-active");
  }

  function turn_on_spinner(element) {
    $(element).addClass("is-active");
  }

  function create_service_area_permission_post() {
    ret = {};
    $(".wbw-userlist").each(function () {
      // console.log("got real id " + $(this).data("id"));
      id = $(this).data("id");
      // console.log("got name " + $(this).data("name"));
      sbname = $(this).data("name");
      // console.log("select vals = "+ $(this).val());
      membership = $(this).val();
      // console.log("got show_on_form = "+ $(this).data("show_on_form"));
      show_on_form = $(this).data("show_on_form");

      ret[id] = { name: sbname, show_on_form: show_on_form, membership: membership };
    });
    return ret;
  }

  $("#wbw_submit").on("click", function () {
    $("#wbw-userlist-table tbody tr").each(function () {
      tr = $(this);
      checked = $(tr).find("input:checkbox").prop("checked");
      select = $(tr).find("select");
      select.data("show_on_form", checked);
    });
    post = create_service_area_permission_post();

    clear_notices();

    $.ajax({
      url: wp_rest_base + wbw_admin_wbw_service_bodies_rest_route,
      method: "POST",
      data: JSON.stringify(post),
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      processData: false,
      beforeSend: function (xhr) {
        turn_on_spinner("#wbw-submit-spinner");

        xhr.setRequestHeader("X-WP-Nonce", $("#_wprestnonce").val());
      },
    })
      .done(function (response) {
        turn_off_spinner("#wbw-submit-spinner");
        notice_success(response);
      })
      .fail(function (xhr) {
        notice_error(xhr);
      });
  });

  // get the permissions, and the userlist from wordpress, and create our select lists
  var parameters = { detail: "true" };

  $.ajax({
    url: wp_rest_base + wbw_admin_wbw_service_bodies_rest_route,
    dataType: "json",
    data: parameters,
    beforeSend: function (xhr) {
      turn_on_spinner("#wbw-form-spinner");
      xhr.setRequestHeader("X-WP-Nonce", $("#_wprestnonce").val());
    },
  }).done(function (response) {
    $.ajax({
      url: wp_rest_base + "wp/v2/users",
      dataType: "json",
      sblist: response,
      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", $("#_wprestnonce").val());
      },
    }).done(function (response) {
      var sblist = this.sblist;
      var userlist = response;
      Object.keys(sblist).forEach((item) => {
        var id = "wbw_userlist_id_" + item;
        var checked = sblist[item]["show_on_form"] ? "checked" : "";
        var appendstr = "<tr>";

        appendstr += "<td>" + sblist[item]["name"] + "</td>";
        appendstr += '<td><select class="wbw-userlist" id="' + id + '" style="width: auto"></select></td>';
        appendstr += '<td class="wbw-center-checkbox"><input type="checkbox" ' + checked + "></td>";
        appendstr += "</tr>";
        $("#wbw-userlist-table tbody").append(appendstr);
        // store metadata away for later
        $("#" + id).data("id", item);
        $("#" + id).data("name", sblist[item]["name"]);

        $(".wbw-userlist").select2({
          multiple: true,
          width: "100%",
        });
        attach_select_options_for_sbid(sblist, userlist, item, "#" + id);

        // turn off spinner
        turn_off_spinner("#wbw-form-spinner");
        // turn on table
        $("#wbw-userlist-table").show();
        $("#wbw_submit").show();
      });
    });
  });
});
