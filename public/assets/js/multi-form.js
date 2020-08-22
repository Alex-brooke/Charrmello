(function ($) {
  $.fn.multiStepForm = function (args) {
    if (args === null || typeof args !== 'object' || $.isArray(args))
      throw " : Called with Invalid argument";
    var form = this;
    var tabs = form.find('.formTab');
    var totalTabs = form.find('.formTab').length - 1;
    var formTitle = $('.form-title');
    var activetab = 0;

    var progress = form.find('.form-progress .progress-bar');
    var title = "";


    form.navigateTo = function (i) {/*index*/
      /*Mark the current section with the class 'current'*/
      tabs.removeClass('current').eq(i).addClass('current');
      // Show only the navigation buttons that make sense for the current section:
      form.find('.previous').toggle(i > 0);
      atTheEnd = i >= tabs.length - 2;
      form.find('.next').toggle(!atTheEnd);
      // console.log('atTheEnd='+atTheEnd);
      form.find('.submit').toggle(atTheEnd);
      fixStepIndicator(curIndex());
      return form;
    }
    function curIndex() {
      /*Return the current index by looking at which section has the class 'current'*/
      title = tabs.filter('.current').attr("data-title")

      return tabs.index(tabs.filter('.current'));
    }
    function fixStepIndicator(n) {
      var prog = (n / totalTabs) * 100;
      progress.css('width', prog + '%').attr('aria-valuenow', prog);

      formTitle.html(title);
      activetab = n;
      form.attr('data-active', n);

    }
    /* Previous button is easy, just go back */
    // form.find('.previous').click(function () {
    //   form.navigateTo(curIndex() - 1);
    // });

    function cloneBtn() {
      if (activetab === 1) {
        form.find('.next').text("Done that");
        form.find('.next').appendTo(".upload-buttons-group");
      }
      if (activetab === 2) {
        form.find('.next').text("Okay next");
        form.find('.next').appendTo(".cover-upload-buttons-group");
      }
      if (activetab === 3) {
        form.find('.next').text("Finished");
        form.find('.next').appendTo(".button-group>div");
      }
    }

    /* Next button goes forward iff current block validates */
    form.find('.next').click(function () {
      if ('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)) {
        if (!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)) {
          form.validate(args.validations);
          if (form.valid() == true) {
            form.navigateTo(curIndex() + 1);
            cloneBtn();
            return true;
          }

          return false;
        }
      }
      form.navigateTo(curIndex() + 1);

    });
    form.find('.submit').on('click', function (e) {
      if (typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
        args.beforeSubmit(form, this);
      /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/
      if (typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)) {
        form.submit();
      }
      return form;
    });
    /*By default navigate to the tab 0, if it is being set using defaultStep property*/
    typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

    form.noValidate = function () {

    }
    return form;
  };
}(jQuery));