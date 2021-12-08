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
            password: {
              validators: {
                notEmpty: { message: "Password Wajib Di Isi" },
                callback: {
                  message: "Passsowrd Tidak Valid",
                  callback: function (e) {
                    if (e.value.length > 0) return r();
                  },
                },
              },
            },
            "confirm-password": {
              validators: {
                notEmpty: { message: "Konfirmasi Password Wajib Di Isi" },
                identical: {
                  compare: function () {
                    return e.querySelector('[name="password"]').value;
                  },
                  message: "Password Tidak Sesuiai",
                },
              },
            },
            
          },
          plugins: { trigger: new FormValidation.plugins.Trigger({ event: { password: !1 } }), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
        })),
        t.addEventListener("click", function (r) {
          r.preventDefault(),
            a.revalidateField("password"),
            a.validate().then(function (a) {
              "Valid" == a
                ? (t.setAttribute("data-kt-indicator", "on"),
                  (t.disabled = !0),
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                      (t.disabled = !1)
                      $('#kt_sign_up_submit').submit()
                  }, 1500))
                : ""
            });
        }),
        e.querySelector('input[name="password"]').addEventListener("input", function () {
          this.value.length > 0 && a.updateFieldStatus("password", "NotValidated");
        });
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSignupGeneral.init();
});
