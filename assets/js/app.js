(function ($) {
   "use strict";

   // let categories = document.querySelectorAll('.app-select')
   let appPage = document.querySelectorAll(".app-page");
   let prevBtn = document.querySelectorAll(".prev-btn");
   let nextBtn = document.querySelectorAll(".next-btn");
   let backBtn = document.querySelectorAll(".back-btn");
   const error = document.querySelectorAll(".error-wrap");

   let pageCounter = 0;

   let partsWrap = document.querySelector(".parts-wrap");

   let appChooseWrap = document.querySelectorAll(".app-choose-wrap");
   appChooseWrap.forEach((wrap) => {
      let appChoose = wrap.querySelectorAll(".app-choose");

      appChoose.forEach((choose, cataIndex) => {
         let chooseList = choose.querySelectorAll(".app-choose li");
         let partsIndex = partsWrap.children[cataIndex];

         chooseList.forEach((list, colorIndex) => {
            list.addEventListener("click", () => {
               let siblings = list.parentElement.children;
               let partsImgIndex = partsIndex.children[colorIndex];

               removeAllActive(siblings);
               list.classList.add("active");

               removeAllActive(partsIndex.children);
               partsImgIndex.classList.add("active");
            });
         });
      });
   });

   // prevBtn.forEach(btn => {
   //     btn.addEventListener('click', ()=>{
   //         for (let i = 0; i < categories.length; i++) {
   //             wrap.classList.remove('style' + (i + 1))
   //         }
   //         removeAllActive(appPage)
   //         document.body.scrollTop = 0;
   //         document.documentElement.scrollTop = 0;
   //     })
   // });
   nextBtn.forEach((btn) => {
      btn.addEventListener("click", () => {
         if (checkPageColorACtive(pageCounter)) {
            pageCounter++;
            // appPage[pageCounter].classList.add('active')
            // if (pageCounter == appPage.length - 1) {
            //     wrap.classList.add('contact-page')
            // }

            getData();
            finalWheelImg(pageCounter);
         } else {

            error.forEach((el) => {
                let errorText = el.querySelector(".error-text h4");
                el.classList.add("active");
                errorText.innerText = "Please choose color to go next step";
             });

         }
      });
   });
   backBtn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
         e.preventDefault();
         pageCounter--;
         removeAllActive(appPage);
         appPage[pageCounter].classList.add("active");
         document.querySelector(".app-area").classList.remove("contact-page");
         // document.body.scrollTop = 0;
         // document.documentElement.scrollTop = 0;
      });
   });
   function removeAllActive(group) {
      for (let i = 0; i < group.length; i++) {
         group[i].classList.remove("active");
      }
   }

   // check if page color has checked class
   function checkPageColorACtive(counter) {
      let AllcolorPage = appPage[counter].querySelectorAll("li");
      let x;
      for (let i = 0; i < AllcolorPage.length; i++) {
         if (AllcolorPage[i].classList.contains("active")) {
            x = AllcolorPage[i];
         }
      }
      if (x) {
         return true;
      } else {
         return false;
      }
   }

   // error close
   error.forEach((el) => {
      let errorText = el.querySelector(".error-text h4");
      el.addEventListener("click", () => {
         el.classList.remove("active");
      });
   });

   // final wheel selectors
   const partsImgs = document.querySelectorAll(".parts img");
   const imgData = document.querySelector(".img_data");
   let finalFormInput = document.querySelectorAll(".color_name_data");
   let final_wheel = [];
   let final_color_name = [];

   // GET FINAL WHEEL DATA
   function getData() {
      // imgs
      final_wheel = [];
      partsImgs.forEach((img) => {
         if (img.classList.contains("active")) {
            final_wheel.push(img);
         }
      });
      // color names
      final_color_name = [];
      
      let chooseList = document.querySelectorAll(".app-choose li");

      chooseList.forEach(color => {
         if (color.classList.contains('active')) {
            let colorname = color.querySelector('.tooltip').innerText
            final_color_name.push(colorname)
         }
      });


      for (let i = 0; i < final_color_name.length; i++) {
         finalFormInput[i].value = final_color_name[i];
      }
   }

   // take screen shot of final wheel
   // document.querySelector('#capture .preview-loader').setAttribute('data-html2canvas-ignore', 'true')
   function finalWheelImg() {
      $(".preloader").delay(500).fadeIn(500);
      window.scrollTo(0, 0);
      partsImgs.forEach((img) => {
         img.removeAttribute("data-html2canvas-ignore");
         if (img.classList.contains("active")) {
         } else {
            img.setAttribute("data-html2canvas-ignore", "true");
         }
      });
      html2canvas(document.querySelector("#capture"), {
         imageTimeout: "0",
         removeContainer: false,
      }).then((canvas) => {
         removeAllActive(appPage);
         appPage[pageCounter].classList.add("active");
         if (pageCounter == appPage.length - 1) {
            document.querySelector(".app-area").classList.add("contact-page");
         }

         $(".preloader").delay(500).fadeOut(500);
         imgData.value = canvas.toDataURL("image/jpeg", 1);
      });
   }
})(jQuery);

// NOT ALLOWED USER TO GET CODES

/*document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  });
  document.onkeydown = function (e) {
    if (e.keyCode == 123) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
        return false;
    }
    if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
        return false;
    }
    if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
        return false;
    }
 }
*/