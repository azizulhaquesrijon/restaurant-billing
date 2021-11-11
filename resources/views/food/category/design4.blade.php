<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/design/common.css')}}">

</head>
<body style="height:100%;">
  <div class="row first-row">
    <div class="m-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
          <div class="container-fluid">
              <a href="#" class="navbar-brand">Brand</a>
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse1">
                  <div class="navbar-nav">
                      <a href="#" class="nav-item nav-link active">Home</a>
                      <a href="#" class="nav-item nav-link">About</a>
                      <a href="#" class="nav-item nav-link">Products</a>
                  </div>

              </div>
          </div>
      </nav>
      </div>
      </div>
  <div class="row">
    <div class="col-sm-3 firstDiv">
      <div class="firstDiv1">
        <div class="row">
         <div class="col-md-12">
           <div class="well">
             <p style="color:#1015b5;font-weight:700;font-size:17px">Business Unit</p>
           </div>
          </div>
       </div>
      </div>
      <div class="firstDiv2">
        <div class="row">
          <div class="col-sm-12" >
            Invoice List
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6" >
            <input class="form-check-input radio-inline float-left" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                <label style="margin-right:25px;">    Due List</label>
           </div>
          <div class="col-sm-6" >
            <input class="form-check-input radio-inline float-right" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label>Paid List</label>
          </div>
        </div>
              <div class="row">
                <div class="col-sm-6" >
                  <div class="row">
                    <div class="col-sm-12" style="font-weight:600">
                      Filter Date
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12 button-width input-width" >
                        <input class="button-width" type="text" id="name">
                      </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-sm-12" style="font-weight:600">
                      Bill No
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 button-width input-width">
                      <input class="button-width" type="text" id="name">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row firstDiv21">
                <div class="col-sm-12 table1 ">

                  <table style="width:100%" class="">
                    <thead>
                    <tr>
                      <th>TABLE</th>
                      <th>L/D</th>
                      <th>BILL ID</th>
                      <th>NET BILL</th>
                    </tr>
                  </thead>
                    <tbody class="tbody1">
                  <tr class="tr1">
                    <td >Company</td>
                    <td >Company</td>
                    <td >21</td>
                    <td >200</td>
                  </tr>
                  <tr class="tr1">
                    <td >Company</td>
                    <td >Company</td>
                    <td >21</td>
                    <td >200</td>
                  </tr>
                  <tr class="tr1">
                    <td >Company</td>
                    <td >Company</td>
                    <td >21</td>
                    <td >200</td>
                    </tr>
                   </tboady>
                  </table>
                </div>
              </div>
      </div>
    </div>
    <div class="col-sm-9 div-2">
      <div class="secondDiv1">

        <div class="row padding2">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 first-text-style">
                    <div class="row">
                      <div class="col-sm-12" >
                    Table No
                    </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-12" >
                        <input class="button-width" type="text" id="name">
                    </div>
                    </div>
                  </div>
                </div>
                  </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-4 first-text-style">
                    Bill Id
                  </div>
                  <div class="col-sm-8">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>               </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-4 first-text-style">
                    Bill No
                  </div>
                  <div class="col-sm-8">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div>

        <div class="row padding2">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 first-text-style">
                    Waiter Code
                  </div>
                  <div class="col-sm-6">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>
                  </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
        </div>

        <div class="row padding2">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 first-text-style">
                    Item Code
                  </div>
                  <div class="col-sm-6">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-4 first-text-style">
                        Quantity
                      </div>
                      <div class="col-sm-8">
                        <input class="button-width" type="text" id="name">
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-4 first-text-style">
                    Rate
                  </div>
                  <div class="col-sm-8">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>
               </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-3 first-text-style">
                    Vat
                  </div>
                  <div class="col-sm-9">
                    <input class="button-width" type="text" id="name">
                  </div>
                </div>              </div>
            </div>
          </div>
        </div>

        <div class="row padding2">
          <div class="col-sm-6">
            <div class="row padding2">
              <div class="col-sm-3 first-text-style">
                Customer
              </div>
              <div class="col-sm-9">
                <input class="button-width" type="text" id="name">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row padding2">
              <div class="col-sm-2 first-text-style">
                Adress
              </div>
              <div class="col-sm-10">
                <input class="button-width" type="text" id="name">
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="secondDiv2">
        <div class="row">
          <center>
            <p style="color:#1015b5;font-weight:800;font-size:20px">ORDER LIST</p>
          <center>
        </div>
        <div class="col-sm-12 table2 ">

          <table style="width:100%" class="">
            <thead>
            <tr>
              <th>ITEM</th>
              <th>PRICE</th>
              <th>QUANTITY</th>
              <th>TOTAL</th>
            </tr>
          </thead>
            <tbody class="tbody1 tboady">
          <tr class="tr1">
            <td >Company</td>
            <td >Company</td>
            <td >21</td>
            <td >200 </td>

          </tr>
          <tr class="tr1">
            <td >Company</td>
            <td >Company</td>
            <td >21</td>
            <td >200</td>
          </tr>
          <tr class="tr1">
            <td >Company</td>
            <td >Company</td>
            <td >21</td>
            <td >200</td>
            </tr>
            <tr class="tr1">
              <td >Company</td>
              <td >Company</td>
              <td >21</td>
              <td >200</td>
              </tr>
              <tr class="tr1">
                <td >Company</td>
                <td >Company</td>
                <td >21</td>
                <td >200</td>
                </tr>
                <tr class="tr1">
                  <td >Company</td>
                  <td >Company</td>
                  <td >21</td>
                  <td >200</td>
                  </tr>
                  <tr class="tr1">
                    <td >Company</td>
                    <td >Company</td>
                    <td >21</td>
                    <td >200</td>
                    </tr>
                    <tr class="tr1">
                      <td >Company</td>
                      <td >Company</td>
                      <td >21</td>
                      <td >200</td>
                      </tr>
                      <tr class="tr1">
                        <td >Company</td>
                        <td >Company</td>
                        <td >21</td>
                        <td >200</td>
                        </tr>
                        <tr class="tr1">
                          <td >Company</td>
                          <td >Company</td>
                          <td >21</td>
                          <td >200</td>
                          </tr>
                          <tr class="tr1">
                            <td >Company</td>
                            <td >Company</td>
                            <td >21</td>
                            <td >200</td>
                            </tr>

           </tboady>
          </table>
        </div>

      </div>
      <div class="secondDiv3">
        <div class="row">
          <div class="col-sm-6 secondDiv31">
            <div class="secondDiv311">
              <div class="row">
              <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:20px">
                PAYMENT METHOD
              </div>

                <div class="col-sm-6">
                  <div class="custom-select" style="width:180px;height:20px;">
                    <select>
                      <option value="0">CASH</option>
                      <option value="1">BANK</option>
                      <option value="2">BKASH</option>
                      <option value="2">CARD</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="secondDiv312">
              <div class="row" >
              <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:15px;">
                PAYMENT CONFIRMATION
              </div>

              <div class="col-sm-1" >
                <label class="container">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-sm-4" style="color:#1015b5;font-weight:800;font-size:15px;">
                <button type="button" class="button-primary">BILL RECEIVED</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 secondDiv32">
            <div class="row" style="padding:3px;">
            <div class="col-sm-6 bill-label" style="color:red;">

              VAT
            </div>
            <div class="col-sm-6" >
              <input class="button-width" type="text" id="name">
            </div>
            <div>
              <div class="row" style="padding:3px;">
              <div class="col-sm-6 bill-label" style="color:#1015b5;">

                DISCOUNT
              </div>
              <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:15px;">
                <input class="button-width" type="text" id="name">
              </div>
            </div>
            <div class="row" style="padding:3px;">
            <div class="col-sm-6 bill-label" style="color:#f57842;">

              SERVICE CHARGE
            </div>
            <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:15px;">
              <input class="button-width" type="text" id="name">
            </div>
          </div>
                <div class="row" style="padding:3px;">
                <div class="col-sm-6 bill-label" style="color:green;">

                  NET BILL
                </div>
                <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:15px;">
                  <input class="button-width" type="text" id="name">
                </div>
                <div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>
