(function () {
     "use strict";
     var allSelect = Array.from(document.querySelectorAll(".custom-select"));

     allSelect.forEach(function (select, index) {
          var selectElm = select.querySelector(".parent select");
          selectElm.style.display = "none";
          // GETTING ARRAY OF OPTIONS IN SELECT
          var options = Array.from(selectElm.children);
          var mainContainer = document.createElement("div");
          // APPENDING OPTIONS
          var ul = document.createElement("ul");
          mainContainer.className = "custom-select-options";
          if (select.classList.contains("icon-imgs")) {
               mainContainer.classList.add("has-images");
          }
          mainContainer.setAttribute(
               "data-select-head",
               "custom-select" + index + ""
          );

          var SelectHead = document.createElement("div");
          // CREATING ACTIVE ELEMENT Appending Select Box with and Checking Default Value And Appending Search Box with
          createHead(SelectHead);
          // ITERATING OVER OPTIONS
          var liContainer = "";
          // CHECKING IF IT CONTAINS SELECT-SEARCH AND APPEND SELECT BOX
          appendingOptions(options);

          var activeHead = select.querySelector(".custom-select-active");
          var SelectOptionsList = document.querySelector(
               ".custom-select-options[data-select-head=" + "custom-select" + index + "]"
          );

          function createHead(headElem) {
               var DefaultSelectedValue =
                    selectElm.querySelector("[selected]") ||
                    selectElm.querySelector("option");
               Object.assign(headElem, {
                    className: "custom-select-active",
                    innerHTML: DefaultSelectedValue.textContent
               });
               //headElem.className = "custom-select-active";
               headElem.setAttribute("data-select-index", "custom-select" + index + "");
               //headElem.innerHTML = DefaultSelectedValue.textContent;
               select.appendChild(headElem);
               document.body.appendChild(mainContainer);
               mainContainer.appendChild(ul);
               appendSearchBox();
          }
          // ITERATING OVER OPTIONS
          function appendingOptions(list) {
               var code = "";
               for (var x = 0; x < list.length; x++) {
                    if (list[x].tagName == "OPTION") {
                         code =
                              "<li data-value=" +
                              list[x].value +
                              ">" +
                              list[x].textContent +
                              "</li>";
                    } else {
                         var head =
                              "<li class='label'><h3>" +
                              list[x].getAttribute("label") +
                              "</li></h3>";
                         var lists = "";
                         var optgroupChildren = Array.from(list[x].children);
                         for (var i = 0; i < optgroupChildren.length; i++) {
                              lists +=
                                   "<li data-value=" +
                                   optgroupChildren[i].value +
                                   ">" +
                                   optgroupChildren[i].textContent +
                                   "</li>";
                         }
                         code = head + lists;
                    }
                    // CONDITION TO CHECK IF CHECKBOX HAS IMAGES
                    if (select.classList.contains("icon-imgs") && list[x].dataset.imgUrl) {
                         code =
                              "<li data-value=" +
                              list[x].value +
                              "> <div class='custom-select-img-container'><img src='" +
                              list[x].dataset.imgUrl +
                              "'></div>" +
                              list[x].textContent +
                              "</li>";
                    }
                    liContainer += code;
               }

               ul.innerHTML = liContainer;
          }
          // FILTERING OPTIONS
          function filterOptions(val) {
               var pattern = new RegExp(val, "i");
               var optionsToShow = options.filter(function (option) {
                    if (pattern.test(option.textContent) === true) {
                         return option;
                    }
               });
               liContainer = "";
               appendingOptions(optionsToShow);
               ul.innerHTML = liContainer;
               ul.querySelector("li[data-value]").classList.add("is-highlighted");
          }
          // SEARCH CHECK
          function appendSearchBox() {
               if (select.classList.contains("select-search")) {
                    var Search = document.createElement("div");
                    var input = document.createElement("input");
                    input.type = "text";
                    mainContainer.classList.add("has-search");
                    input.className = "custom-select-searchbox";
                    input.placeholder = "Enter your Search Here";
                    Search.className = "search-list";
                    Search.appendChild(input);
                    //mainContainer.prepend(Search);
                    mainContainer.insertBefore(Search, ul);
               }
          }
          // ADJUST SIZE + WIDTH
          function adjustSize() {
               mainContainer.style.width = SelectHead.offsetWidth + "px";
               mainContainer.style.left = SelectHead.getBoundingClientRect().left + "px";
               if (mainContainer.classList.contains("has-search")) {
                    mainContainer.style.top =
                         SelectHead.getBoundingClientRect().top + window.pageYOffset + "px";
               } else {
                    mainContainer.style.top =
                         SelectHead.getBoundingClientRect().bottom +
                         5 +
                         window.pageYOffset +
                         "px";
               }
          }
          // DEBOUNCE FUNCTION
          function debounce(func, wait, immediate) {
               var timeout;
               return function () {
                    var context = this,
                         args = arguments;
                    var later = function () {
                         timeout = null;
                         if (!immediate) func.apply(context, args);
                    };
                    var callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
               };
          }
          // ADJUST SIZE OF MENU ON WINDOW RESIZE
          window.addEventListener("resize", function () {
               debounce(adjustSize());
          });
          // HANDLING CLICK ON HEAD
          activeHead.addEventListener("click", function (e) {
               var thisSelectIndex = this.getAttribute("data-select-index");
               var thisList = document.querySelector(
                    ".custom-select-options[data-select-head=" + thisSelectIndex + "]"
               );
               if (thisList.classList.contains("is-active")) {
                    thisList.classList.remove("is-active");
               } else {
                    filterOptions();
                    // PREVENT EVENT FROM BUBBLING
                    e.stopPropagation();
                    // CLOSING ALL OPEN LISTS
                    var allLists = Array.from(
                         document.querySelectorAll(".custom-select-options")
                    );
                    allLists.forEach(function (list) {
                         if (list.classList.contains("is-active")) {
                              list.classList.remove("is-active");
                         }
                    });
                    // ADJUST THE POSITION AND SIZE OF LIST
                    adjustSize();
                    SelectOptionsList.classList.add("is-active");
                    // RESET SEARCH VALUE AND MAKE IT FOCUSED
                    if (mainContainer.querySelector(".custom-select-searchbox")) {
                         mainContainer.querySelector(".custom-select-searchbox").focus();
                         mainContainer.querySelector(".custom-select-searchbox").value = "";
                    }
               }
               // Keyboard Support
               ul.querySelector("li[data-value]").classList.add("is-highlighted");
          });
          // HANDLING CLICK ON UL
          SelectOptionsList.addEventListener("click", function (e) {
               // FUNCTION TO CHECK IF THE ELEMENT HAVE DATA VALUE
               function findParentWithData(elem) {
                    try {
                         if (elem.getAttribute("data-value")) return elem;
                    } catch (e) {
                         return false;
                    }
                    while (!elem.getAttribute("data-value")) {
                         return findParentWithData(elem.parentNode);
                    }
               }
               var li = findParentWithData(e.target);
               if (li !== false) {
                    var selectedValue = findParentWithData(e.target).textContent;
                    SelectOptionsList.classList.remove("is-active");
                    SelectHead.textContent = selectedValue;
                    selectElm.value = findParentWithData(e.target).getAttribute(
                         "data-value"
                    );
                    // TRIGGER CHANGE EVENT ON SELECT ELEMENT
                    var event = new Event("change");
                    selectElm.dispatchEvent(event);
               }
          });
          // HANDLING CLICK ON Search
          var searchBoxes = Array.from(
               SelectOptionsList.querySelectorAll(".search-list")
          );
          searchBoxes.forEach(function (selectbox) {
               var search = selectbox.querySelector("input");
               selectbox.addEventListener("click", function (e) {
                    e.stopPropagation();
               });
               // HANDLICK TYPING ON SEARCH
               search.addEventListener("keyup", function (event) {
                    if (
                         event.keyCode !== 38 &&
                         event.keyCode !== 40 &&
                         event.keyCode !== 13
                    ) {
                         filterOptions(this.value);
                    }
                    // TYPING ENTER ON SEARCH BOX
                    if (event.keyCode == 13 && ul.children.length > 0) {
                         var highlightedLi = ul.querySelector(".is-highlighted");
                         SelectHead.textContent = highlightedLi.textContent;
                         selectElm.value = highlightedLi.getAttribute("data-value");
                         SelectOptionsList.classList.remove("is-active");
                    }
                    // TYPING ESCAPE ON SEARCH BOX
                    else if (event.keyCode == 27) {
                         SelectOptionsList.classList.remove("is-active");
                    }
               });
          });
     });
     // HANDLING CLICK OUTSIDE
     var allOptions = Array.from(
          document.querySelectorAll(".custom-select-options")
     );
     // KEYBOARD EVENTS
     document.addEventListener("keydown", function (event) {
          var activeOption =
               document.querySelector(".custom-select-options.is-active ul") || "";
          var activeUl =
               document.querySelector(".custom-select-options.is-active") || "";
          if (activeOption) {
               var selcted = activeUl.getAttribute("data-select-head");
               var selectedLi = activeOption.querySelector(
                    "li[data-value].is-highlighted"
               );
               var SelectHead = document.querySelector(
                    "[data-select-index=" + selcted + "]"
               );
               var selectElm = SelectHead.parentElement.previousSibling;
               if (event.keyCode == 40) {
                    if (selectedLi && selectedLi.nextSibling !== null) {
                         if (selectedLi.nextSibling.getAttribute("data-value")) {
                              selectedLi.classList.remove("is-highlighted");
                              selectedLi.nextSibling.classList.add("is-highlighted");
                         } else if (
                              selectedLi.nextSibling.nextSibling.getAttribute("data-value") !==
                              null
                         ) {
                              selectedLi.classList.remove("is-highlighted");
                              selectedLi.nextSibling.nextSibling.classList.add("is-highlighted");
                         }
                    } else {
                         selectedLi.classList.remove("is-highlighted");
                         activeOption
                              .querySelector("li[data-value]")
                              .classList.add("is-highlighted");
                    }
               } else if (event.keyCode == 38) {
                    if (selectedLi.previousSibling !== null) {
                         if (selectedLi.previousSibling.getAttribute("data-value")) {
                              selectedLi.classList.remove("is-highlighted");
                              selectedLi.previousSibling.classList.add("is-highlighted");
                         } else if (
                              selectedLi.previousSibling.previousSibling !== null &&
                              selectedLi.previousSibling.previousSibling.getAttribute(
                                   "data-value"
                              ) !== null
                         ) {
                              selectedLi.classList.remove("is-highlighted");
                              selectedLi.previousSibling.previousSibling.classList.add(
                                   "is-highlighted"
                              );
                         }
                    } else {
                         selectedLi.classList.remove("is-highlighted");
                         activeOption.lastChild.classList.add("is-highlighted");
                    }
               } else if (event.keyCode == 13) {
                    var selectElement = document.querySelector(
                         ".custom-select-options.is-active li.is-highlighted"
                    );
                    SelectHead.textContent = selectElement.textContent;
                    selectElm.value = selectElement.getAttribute("data-value");
                    activeUl.classList.remove("is-active");
               }
          }
     });
     document.addEventListener("click", function () {
          allOptions.forEach(function (option) {
               option.classList.remove("is-active");
          });
     });
})();
