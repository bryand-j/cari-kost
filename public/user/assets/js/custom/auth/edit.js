"use strict";
var KTSignupGeneral = (function () {
  var e,
    t,
    a,
    s,
    r = function () {
      return 100 === s.getScore();
    };
  return {
    init: function () {
      (e = document.querySelector("#kt_sign_up_form")),
        (t = document.querySelector("#kt_sign_up_submit")),
        (s = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]'))),
        (a = FormValidation.formValidation(e, {
          fields: {
            name: { validators: { notEmpty: { message: "Nama Wajib Di Isi" } } },
            no_wa: { validators: { notEmpty: { message: "No Wa Wajib Di Isi" } } },
            email: { validators: { notEmpty: { message: "Email Wajib Di Isi" }, emailAddress: { message: "Alamat Email Tidak Valid" } } },
            
          },
          plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
        })),
        t.addEventListener("click", function (r) {
          r.preventDefault(),
            a.validate().then(function (a) {
              "Valid" == a
                ? (t.setAttribute("data-kt-indicator", "on"),
                  (t.disabled = !0),
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                      (t.disabled = !1)
                      $('#kt_sign_up_form').submit()
                  }, 1500))
                : ""
            });
        })
        
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSignupGeneral.init();
});
