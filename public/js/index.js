/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('select[name=\"client\"]').on('change', function () {\n    var clientId = $(this).val();\n    console.log(clientId);\n\n    if (clientId) {\n      $.ajax({\n        url: '/parking/dropDown/' + clientId,\n        type: \"GET\",\n        dataType: \"json\",\n        success: function success(data) {\n          $('select[name=\"car\"]').empty();\n          $.each(data, function (key, value) {\n            $('select[name=\"car\"]').append('<option value=\"' + value.id + '\">' + value.brand + \" \" + value.model + '</option>');\n          });\n        }\n      });\n    } else {\n      $('select[name=\"car\"]').empty();\n    }\n  });\n});\nvar div = document.getElementById('form-wrapper');\n\nfunction addForm() {\n  console.log(\"Work\");\n  var forms = div.getElementsByClassName('form');\n  var firstForm = forms[0];\n  var formClone = firstForm.cloneNode(true);\n  div.appendChild(formClone);\n}\n\n$('button').on('click', function () {\n  var $form = $('form').eq(0);\n  $form.clone().insertAfter($form);\n});\n$(document).ready(function () {\n  $('#addNewForm').click(function () {\n    var newel = $('.form-wrapper:last').clone();\n    $(newel).insertAfter(\".form-wrapper:last\");\n  });\n  $('.txt').focus(function () {\n    $(this).css('border-color', 'red');\n  });\n  $('.txt').focusout(function () {\n    $(this).css('border-color', 'initial');\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvaW5kZXguanM/OWE1NyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIm9uIiwiY2xpZW50SWQiLCJ2YWwiLCJjb25zb2xlIiwibG9nIiwiYWpheCIsInVybCIsInR5cGUiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJkYXRhIiwiZW1wdHkiLCJlYWNoIiwia2V5IiwidmFsdWUiLCJhcHBlbmQiLCJpZCIsImJyYW5kIiwibW9kZWwiLCJkaXYiLCJnZXRFbGVtZW50QnlJZCIsImFkZEZvcm0iLCJmb3JtcyIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJmaXJzdEZvcm0iLCJmb3JtQ2xvbmUiLCJjbG9uZU5vZGUiLCJhcHBlbmRDaGlsZCIsIiRmb3JtIiwiZXEiLCJjbG9uZSIsImluc2VydEFmdGVyIiwiY2xpY2siLCJuZXdlbCIsImZvY3VzIiwiY3NzIiwiZm9jdXNvdXQiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVc7QUFDekJGLEVBQUFBLENBQUMsQ0FBQyx1QkFBRCxDQUFELENBQTJCRyxFQUEzQixDQUE4QixRQUE5QixFQUF3QyxZQUFXO0FBQy9DLFFBQUlDLFFBQVEsR0FBR0osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSyxHQUFSLEVBQWY7QUFDQUMsSUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVlILFFBQVo7O0FBQ0EsUUFBR0EsUUFBSCxFQUFhO0FBQ1RKLE1BQUFBLENBQUMsQ0FBQ1EsSUFBRixDQUFPO0FBQ0hDLFFBQUFBLEdBQUcsRUFBRSx1QkFBdUJMLFFBRHpCO0FBRUhNLFFBQUFBLElBQUksRUFBRSxLQUZIO0FBR0hDLFFBQUFBLFFBQVEsRUFBRSxNQUhQO0FBSUhDLFFBQUFBLE9BQU8sRUFBQyxpQkFBU0MsSUFBVCxFQUFlO0FBQ25CYixVQUFBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QmMsS0FBeEI7QUFDQWQsVUFBQUEsQ0FBQyxDQUFDZSxJQUFGLENBQU9GLElBQVAsRUFBYSxVQUFTRyxHQUFULEVBQWNDLEtBQWQsRUFBcUI7QUFDOUJqQixZQUFBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QmtCLE1BQXhCLENBQStCLG9CQUFrQkQsS0FBSyxDQUFDRSxFQUF4QixHQUEyQixJQUEzQixHQUFpQ0YsS0FBSyxDQUFDRyxLQUF2QyxHQUErQyxHQUEvQyxHQUFvREgsS0FBSyxDQUFDSSxLQUExRCxHQUFnRSxXQUEvRjtBQUNILFdBRkQ7QUFHSDtBQVRFLE9BQVA7QUFXSCxLQVpELE1BWUs7QUFDRHJCLE1BQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCYyxLQUF4QjtBQUNIO0FBQ0osR0FsQkQ7QUFtQkgsQ0FwQkQ7QUFzQkEsSUFBTVEsR0FBRyxHQUFHckIsUUFBUSxDQUFDc0IsY0FBVCxDQUF3QixjQUF4QixDQUFaOztBQUNBLFNBQVNDLE9BQVQsR0FBbUI7QUFDZmxCLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE1BQVo7QUFDQSxNQUFJa0IsS0FBSyxHQUFHSCxHQUFHLENBQUNJLHNCQUFKLENBQTJCLE1BQTNCLENBQVo7QUFDQSxNQUFJQyxTQUFTLEdBQUdGLEtBQUssQ0FBQyxDQUFELENBQXJCO0FBQ0EsTUFBSUcsU0FBUyxHQUFHRCxTQUFTLENBQUNFLFNBQVYsQ0FBb0IsSUFBcEIsQ0FBaEI7QUFDQVAsRUFBQUEsR0FBRyxDQUFDUSxXQUFKLENBQWdCRixTQUFoQjtBQUNIOztBQUNENUIsQ0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUFZRyxFQUFaLENBQWUsT0FBZixFQUF3QixZQUFXO0FBQy9CLE1BQUk0QixLQUFLLEdBQUcvQixDQUFDLENBQUMsTUFBRCxDQUFELENBQVVnQyxFQUFWLENBQWEsQ0FBYixDQUFaO0FBQ0FELEVBQUFBLEtBQUssQ0FBQ0UsS0FBTixHQUFjQyxXQUFkLENBQTBCSCxLQUExQjtBQUNILENBSEQ7QUFLQS9CLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUN4QkYsRUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQm1DLEtBQWpCLENBQXVCLFlBQVU7QUFDakMsUUFBSUMsS0FBSyxHQUFHcEMsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JpQyxLQUF4QixFQUFaO0FBQ0FqQyxJQUFBQSxDQUFDLENBQUNvQyxLQUFELENBQUQsQ0FBU0YsV0FBVCxDQUFxQixvQkFBckI7QUFBOEMsR0FGOUM7QUFHQWxDLEVBQUFBLENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVXFDLEtBQVYsQ0FBZ0IsWUFBVTtBQUN0QnJDLElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUXNDLEdBQVIsQ0FBWSxjQUFaLEVBQTJCLEtBQTNCO0FBQXFDLEdBRHpDO0FBRUF0QyxFQUFBQSxDQUFDLENBQUMsTUFBRCxDQUFELENBQVV1QyxRQUFWLENBQW1CLFlBQVU7QUFDekJ2QyxJQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFzQyxHQUFSLENBQVksY0FBWixFQUEyQixTQUEzQjtBQUNILEdBRkQ7QUFHSCxDQVREIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgJCgnc2VsZWN0W25hbWU9XCJjbGllbnRcIl0nKS5vbignY2hhbmdlJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBjbGllbnRJZCA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIGNvbnNvbGUubG9nKGNsaWVudElkKTtcbiAgICAgICAgaWYoY2xpZW50SWQpIHtcbiAgICAgICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICAgICAgdXJsOiAnL3BhcmtpbmcvZHJvcERvd24vJyArIGNsaWVudElkLFxuICAgICAgICAgICAgICAgIHR5cGU6IFwiR0VUXCIsXG4gICAgICAgICAgICAgICAgZGF0YVR5cGU6IFwianNvblwiLFxuICAgICAgICAgICAgICAgIHN1Y2Nlc3M6ZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAgICAgICAgICAgICAkKCdzZWxlY3RbbmFtZT1cImNhclwiXScpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgICAgICQuZWFjaChkYXRhLCBmdW5jdGlvbihrZXksIHZhbHVlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKCdzZWxlY3RbbmFtZT1cImNhclwiXScpLmFwcGVuZCgnPG9wdGlvbiB2YWx1ZT1cIicrdmFsdWUuaWQrJ1wiPicgK3ZhbHVlLmJyYW5kICsgXCIgXCIgK3ZhbHVlLm1vZGVsKyc8L29wdGlvbj4nKTtcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1lbHNle1xuICAgICAgICAgICAgJCgnc2VsZWN0W25hbWU9XCJjYXJcIl0nKS5lbXB0eSgpO1xuICAgICAgICB9XG4gICAgfSk7XG59KTtcblxuY29uc3QgZGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm0td3JhcHBlcicpO1xuZnVuY3Rpb24gYWRkRm9ybSgpIHtcbiAgICBjb25zb2xlLmxvZyhcIldvcmtcIik7XG4gICAgbGV0IGZvcm1zID0gZGl2LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2Zvcm0nKTtcbiAgICBsZXQgZmlyc3RGb3JtID0gZm9ybXNbMF07XG4gICAgbGV0IGZvcm1DbG9uZSA9IGZpcnN0Rm9ybS5jbG9uZU5vZGUodHJ1ZSk7XG4gICAgZGl2LmFwcGVuZENoaWxkKGZvcm1DbG9uZSk7XG59XG4kKCdidXR0b24nKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICB2YXIgJGZvcm0gPSAkKCdmb3JtJykuZXEoMCk7XG4gICAgJGZvcm0uY2xvbmUoKS5pbnNlcnRBZnRlcigkZm9ybSk7XG59KTtcblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAkKCcjYWRkTmV3Rm9ybScpLmNsaWNrKGZ1bmN0aW9uKCl7XG4gICAgdmFyIG5ld2VsID0gJCgnLmZvcm0td3JhcHBlcjpsYXN0JykuY2xvbmUoKTtcbiAgICAkKG5ld2VsKS5pbnNlcnRBZnRlcihcIi5mb3JtLXdyYXBwZXI6bGFzdFwiKTsgIH0pO1xuICAgICQoJy50eHQnKS5mb2N1cyhmdW5jdGlvbigpe1xuICAgICAgICAkKHRoaXMpLmNzcygnYm9yZGVyLWNvbG9yJywncmVkJyk7ICB9KTtcbiAgICAkKCcudHh0JykuZm9jdXNvdXQoZnVuY3Rpb24oKXtcbiAgICAgICAgJCh0aGlzKS5jc3MoJ2JvcmRlci1jb2xvcicsJ2luaXRpYWwnKTtcbiAgICB9KTtcbn0pO1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9pbmRleC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/index.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/index.js"]();
/******/ 	
/******/ })()
;