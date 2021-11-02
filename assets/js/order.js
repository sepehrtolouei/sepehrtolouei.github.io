
//  function myfunction (){
//     //  var x = document.getElementById("country");
//     //  if (x.style.display === "none") {
//     //      x.style.display = "block " ; 
//     //  } else {
//     //      x.style.display = "none" ;
//     //  }
//     // var element = document.getElementById ("country");
//     // element.classList.remove("d-none")
//  }
// $(document).ready(() => {
//   // $("select[name=accreditation]").change(function (e) {
//   //     e.preventDefault();
//   //     // var _self = $(this);
//   //     // var myacc = _self.data('acc');  // Y
//   //     // var mywacc = _self.data('wacc'); // Accreditation A
//   //     // var myitc = _self.data('itc'); // Mr. Jones
//   //     let condition = $(this).val();
//   //         // $('#id_accreditation').val(myacc).change(); //trigger the change event so that associated event handler will get called
//   //         // $("#id_w_accreditation").val(mywacc);
//   //         // $("#id_issue_the_certificate").val(myitc);
//   //     }); 
  $('select[name=company]').on('change', function () {
    if (this.value == 'Y') {
      $("#showsayer").show();
      
    } else {
    
      $("#showsayer").hide();
    }
  });
  $('select[name=money]').on('change', function () {
    if (this.value === 'dollar') 
      $("#elseMoney").css('display','flex');
    else 
    
      $("#elseMoney").css('display','none');
    
  });
  $('select[name=moneyFirst]').on('change', function () {
    if (this.value === 'euro') 
      $("#otherMoney").css('display','flex');
    else 
    
      $("#otherMoney").css('display','none');
    
  });
// 
// پیام مدیر سیستم
// 											:چنانچه قرارداد ذیل هر نوع دادستدی خلاف قوانین حاکم باشد بعد از کسر هزینه
// 											خسارت وارده بجهت سو استفاده از بستر نرم افزار به تشخیص مدیر سیستم
// 											: مبلغ واریزی فقط با ری دادگاه صالح به خریدار یا فروشنده مرجوع خواهد شد.