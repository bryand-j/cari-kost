"use strict";
var KTSigninGeneral = (function () {
  var t, e, i;
  return {
    init: function () {
      (t = document.querySelector("#kt_sign_in_form")),
        (e = document.querySelector("#kt_sign_in_submit")),
        (i = FormValidation.formValidation(t, {
          fields: {
            email: { validators: { notEmpty: { message: "Email Wajib Di Isi" }, emailAddress: { message: "Email Tidak Valid" } } },
            password: { validators: { notEmpty: { message: "Password Wajib Di Isi" } } },
          },
          plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row" }) },
        })),
        e.addEventListener("click", function (n) {
          n.preventDefault(),
            i.validate().then(function (i) {
              "Valid" == i
                ? (e.setAttribute("data-kt-indicator", "on"),
                  (e.disabled = !0),
                  setTimeout(function () {
                    e.removeAttribute("data-kt-indicator"),
                      (e.disabled = !1)
                      $('#kt_sign_in_form').submit()
                  }, 200))
                : '';
            });
        });
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSigninGeneral.init();
});
