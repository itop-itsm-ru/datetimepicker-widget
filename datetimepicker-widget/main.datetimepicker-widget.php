<?php

/**
 * Module DateTimePicker Wigdet (jQuery plugin)
 * https://github.com/vbkunin/datetimepicker-widget-for-itop
 *
 * @author      Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

class DateTimePickerJQueryPlugIn implements iPageUIExtension
{

  public function GetBannerHtml(iTopWebPage $oPage)
  {
    $sConfJSON = json_encode(utils::GetConfig()->GetModuleSetting('datetimepicker-widget', 'default'));
    $oPage->add_linked_stylesheet(utils::GetAbsoluteUrlModulesRoot().'datetimepicker-widget/css/jquery.datetimepicker.css');
    $oPage->add_linked_script(utils::GetAbsoluteUrlModulesRoot().'datetimepicker-widget/js/jquery.datetimepicker.js');
    $oPage->add_ready_script(
<<< EOF

      var config = $sConfJSON;
      try {
        $(".datetime-pick, .date-pick")
          .datepicker("destroy")
          .each(function () {
            var img = document.createElement('img');
            img.className = "calendar";
            img.name = this.name;
            img.src = "../images/calendar.png";
            $(this).after(img);
            if (this.className == 'datetime-pick') {
              config.format = 'Y-m-d H:i';
            } else if (this.className == 'date-pick') {
              config.format = 'Y-m-d';
              config.timepicker = false;
              config.closeOnDateSelect = true;
            }
            $(this).datetimepicker(config);
          });
        $('.calendar').click(function () {
          $(".datetime-pick[name='" + this.name + "'], .date-pick[name='" + this.name + "']").datetimepicker('show');
        });
      } catch (err) {
        // console.log(err);
      }

EOF
    );
  }

  public function GetNorthPaneHtml(iTopWebPage $oPage)
  {
  }

  public function GetSouthPaneHtml(iTopWebPage $oPage)
  {
  }

}
?>
