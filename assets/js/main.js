function openNav() {
  document.getElementById("mySidebar").classList.toggle('sidebar-close');
  document.getElementById("mySidebar").classList.toggle('sidebar-open');
  document.querySelector(".order-content").classList.toggle('order-content-open')
  document.querySelector(".order-content").classList.toggle('order-content-close')
  document.querySelector('.welcome').classList.toggle('welcomeL')
  document.querySelector('.welcome').classList.toggle('welcomeS')
  let openItem = document.querySelectorAll(".sidebar .openbtn span")
  for (let i = 0; i < openItem.length; i++) {
    openItem[i].classList.toggle('open-item')
    openItem[i].classList.toggle('close-item')
  }
  let sideBarItemClose = document.querySelectorAll(".side-bar-item-close")
  let sideBarItemOpen = document.querySelectorAll(".side-bar-item-open")
  for (let i = 0; i < sideBarItemClose.length; i++) {
    sideBarItemClose[i].classList.toggle('d-none')
    sideBarItemOpen[i].classList.toggle('d-none')
  }
}

var postBoxes = document.querySelectorAll('.post-box')
postBoxes.forEach(function (postBox) {

  postBox.addEventListener('click', function () {
    var postId = this.getAttribute('post-id')
    console.log(postId)
    document.getElementById('comment-form-' + postId).style.display = 'block'
  })
})

function checkValidate(item) {
  if (item.val() == "") {
    item.removeClass('border-0')
    item.addClass('border-danger')
    return false
  } else {
    item.removeClass('border-danger')
    item.addClass('border-0')
    return true
  }
}
var removeUser = document.querySelectorAll('.remove-user')
removeUser.forEach(function (item) {
  item.addEventListener('click', function () {
    item.parentElement.parentElement.style.display = "none"
  })
})
// فعلا امتحانی یک کاربر رو نشون میده با یک ای دی خاص
// اين دو تا تابع بعدا میشه یکی
var userInfo1 = document.querySelector('#user-info1')

function showUserDetails() {
  userInfo1.classList.remove('d-none')
}
var technicalInfo1 = document.querySelector("#technical-info1")
var technicalTable = document.querySelector("#technicalTable")

function showTechnicalDetails() {
  technicalInfo1.classList.remove('d-none')
  technicalTable.classList.remove('d-none')
}
//  add user
var editUser = document.querySelector('#editUser')
// editUser.onclick = function (e) {
//   e.preventDefault()
// }

// editUser ends
// var emailValid= new RegExp('/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/')
var emailValid = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)
var passwordValid = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/)
$(document).ready(function () {
  var passwordVisible = document.querySelectorAll('.pass')
  for (let i = 0; i < passwordVisible.length; i++) {
    console.log(passwordVisible[i]);
  }
  // change type of input from password to text
  $('#not-visible').on('click', function () {
    $(this).addClass('d-none')
    $('#visible').removeClass('d-none')
    $('#password-field').attr('type', 'text')
  })
  $('#visible').on('click', function () {
    $(this).addClass('d-none')
    $('#not-visible').removeClass('d-none')
    $('#password-field').attr('type', 'password')
  })
  // send login form
  $('#sendLoginForm').on('click', function (e) {
    e.preventDefault()
    let adminEmail = $('#emailAdmin').val()
    let adminPass = $('#password-field').val()
    if (!emailValid.test(adminEmail)) {
      $('#emailAdmin').removeClass('login-input')
      $('#emailAdmin').addClass('border-bottom-danger')
      $('.bi-envelope').css('color', 'red')
    }
    if (emailValid.test(adminEmail)) {
      $('#emailAdmin').removeClass('border-bottom-danger')
      $('#emailAdmin').addClass('login-input')
      $('.bi-envelope').css('color', 'var(--text-color)')
    }
    if (!passwordValid.test(adminPass)) {
      $('#popup-signUp-pass').removeClass('d-none')
      $('#password-field').on('focus', function () {
        $('#popup-signUp-pass').addClass('d-none')
      })
      $('#password-field').removeClass('login-input')
      $('#password-field').addClass('border-bottom-danger')
      $('#not-visible').css('color', 'red')
      $('#visible').css('color', 'red')
      $('#lock').css('color', 'red')
    }
    if (passwordValid.test(adminPass)) {
      $('#password-field').removeClass('border-bottom-danger')
      $('#password-field').addClass('login-input')
      $('#not-visible').css('color', 'var(--text-color)')
      $('#visible').css('color', 'var(--text-color)')
      $('#lock').css('color', 'var(--text-color)')
    }
  })
  // ************************************************************************************
  // table pagination all technicians
  var url = new URL(window.location.href);
  var limit = url.searchParams.get("limit");
  var cpage = parseInt(url.searchParams.get("page"));
  $.ajax({
    url: `https://5b5cb0546a725000148a67ab.mockapi.io/api/v1/users`,
    success: function (result) {
      visitTechnicians = result.length;
      visitTechniciansPages = Math.floor((visitTechnicians / 9) + 1)
      $.ajax({
        url: `https://5b5cb0546a725000148a67ab.mockapi.io/api/v1/users?page=${cpage}&limit=${limit}`,
        success: function (result) {
          console.log(result);
          result.forEach(e => {
            $('#techniciansCv').append(`<tr>
                                          <td class="text-center text-nowrap">${e.avatar}</td>
                                          <td class="text-center text-nowrap">${e.createdAt}</td>
                                          <td class="text-center text-nowrap">${e.id}</td>
                                          <td class="text-center text-nowrap">${e.name}</td>
                                        </tr>
                                        `)
          })
          // let currentpage = cpage;
          // let nextpage  = cpage++ ;
          // let prevpage = cpage-- ;

          let pagination = "";
          pagination = `<nav aria-label="Page navigation example" class="d-flex justify-content-start">
          <ul class="pagination justify-content-center mt-4">
            <li class="page-item me-2">
              <a class="bg-transparent border-0 btn-effect page-link" id="visitTechniciansPrev" href="visit-technicians.php?page=${cpage-1}&limit=9" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item ms-2">
              <a class="bg-transparent border-0 btn-effect page-link" id="visitTechniciansNext" href="visit-technicians.php?page=${cpage+1}&limit=9">Next</a>
            </li>
          </ul>
        </nav>`;
          document.getElementById('techniciansCv').innerHTML += pagination
          if (cpage == 1) {
            $('#visitTechniciansPrev').addClass('disabled')
          }
          if (cpage == allUserRequestsPages) {
            $('#visitTechniciansNext').addClass('disabled')
          }
        }
      })
    }
  })

  // *************************************************************************************
  // validat services
  var files, imageType;
  var validateImage = $('#service-img').on('change', function () {
    files = document.getElementById('service-img').files;
    imageType = files[0].type
    if (imageType == "image/png" || imageType == "image/jpeg" || imageType == "image/jpg") {
      $('#upload-image').removeClass('border-danger')
      $('#upload-image').addClass('border-0')
      return true
    } else {
      alert("invalid image type")
      $('#upload-image').removeClass('border-0')
      $('#upload-image').addClass('border-danger')
      return false
    }
  })
  $('#send-service').on('click', function (e) {
    e.preventDefault()
    if ($('#serviceTitle').val() == "") {
      $('#serviceTitle').removeClass('border-0')
      $('#serviceTitle').addClass('border-danger')
      $('.service-title-popup').removeClass('d-none')
    } else {
      $('#serviceTitle').removeClass('border-danger')
      $('#serviceTitle').addClass('border-0')
      $('.service-title-popup').addClass('d-none')
    }
    if (document.getElementById('service-img').files.length == 0) {
      console.log("no files selected");
      $('#upload-image').removeClass('border-0')
      $('#upload-image').addClass('border-danger')
    } else {
      $('#upload-image').removeClass('border-danger')
      $('#upload-image').addClass('border-0')
    }
    if ($('#serviceTitle').val() != "" && document.getElementById('service-img').files.length != 0) {
      document.getElementById('services-form').submit()
    }
  })
  // services ends
  // ***************************************************************************************
  // userRequests starts
  $.ajax({
    url: `https://5b5cb0546a725000148a67ab.mockapi.io/api/v1/users`,
    success: function (result) {
      console.log(result.length);
      allUserRequests = result.length;
      allUserRequestsPages = Math.floor((allUserRequests / 9) + 1)
      console.log(allUserRequestsPages);
      $.ajax({
        url: `https://5b5cb0546a725000148a67ab.mockapi.io/api/v1/users?page=${cpage}&limit=${limit}`,
        success: function (result) {
          console.log(result.length);
          result.forEach(item => {
            $('#userRequests').append(`<tr>
            <td class="text-center text-nowrap">${item.id}</td>
            <td class="text-center text-nowrap">${item.createdAt}</td>
            <td class="text-center text-nowrap">${item.avatar}</td>
            <td class="text-center text-nowrap">${item.name}</td>
            <td class="text-center text-nowrap">1400/03/20</td>
          </tr>`)
          })
          var userRequestsPagination = "";
          userRequestsPagination = `<nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center mt-4">
            <li class="page-item me-2"><a class="bg-transparent border-0 btn-effect page-link" id="userRequestsPrev" href="userRequests.php?page=${cpage-1}&limit=${limit}">Previous</a></li>
            <li class="page-item ms-2"><a class="bg-transparent border-0 btn-effect page-link" id="userRequestsNext" href="userRequests.php?page=${cpage+1}&limit=${limit}">Next</a></li>
          </ul>
        </nav>`;
          document.getElementById('userRequests').innerHTML += userRequestsPagination

          if (cpage == 1) {
            console.log(cpage);
            $('#userRequestsPrev').addClass('disabled')
          }
          if (cpage == allUserRequestsPages) {
            $('#userRequestsNext').addClass('disabled')
          }
        }
      })
    }
  })

  // userRequests ends
  // ***************************************************************************
  // offers starts
  $('input[type="file"]').change(function (e) {
    var file = e.target.files[0].name;
    // console.log(file);
    $('#choose-offers-img').addClass('d-none')
    $('.selected-image').removeClass('d-none')
    $('.selected-image img').attr('src', window.URL.createObjectURL(this.files[0]))
  });
  $('#send-offers').on('click', function () {
  //  var exams= document.querySelectorAll('.exam input');
  //  console.log(exams);
   var aboutOffer = document.querySelectorAll('#offersForm .about-offer')
   aboutOffer.forEach(item=>{
    console.log(item)
    console.log(item.value)
   item.nextElementSibling.classList.remove('d-none')
   item.nextElementSibling.textContent=item.value
   item.classList.add('d-none')    
   })
  //  $('.about-offer').siblings().removeClass('d-none')
    // $('#about-offer').removeClass('d-none').text($('#offersTitle').val())
    // $('#offersTitle').addClass('d-none')
    // $('#offer-price').removeClass('d-none').text($('#offersAmount').val())
    // $('#offersAmount').addClass('d-none')
  })
  // offers ends

})