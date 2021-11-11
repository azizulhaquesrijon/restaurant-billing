<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
  .firstDiv{
    background-color: #dbd3d3;
    height: 97vh;
    border-radius: 5px;
    padding: 10px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .firstDiv1{
    background-color: #dbd3d3;
    height: 20vh;
    border-radius: 5px;
    padding: 20px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .firstDiv2{
    background-color: #dbd3d3;
    height: 65vh;

    border-radius: 5px;
    padding: 8px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .firstDiv21{
    padding: 8px;


  }
  .secondDiv1{
    background-color: #dbd3d3;
    height: 25vh;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .secondDiv2{
    background-color: #dbd3d3;
    height: 35vh;
    border-radius: 5px;
    padding: 2px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .secondDiv3{
    background-color: #dbd3d3;
    height: 25vh;
    border-radius: 5px;
    padding: 12px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;
  }

  .secondDiv31{
    background-color: #dbd3d3;
    border-radius: 5px;
    padding: 2px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .secondDiv32{

    background-color: #dbd3d3;
    border-radius: 5px;
    padding: 10px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .secondDiv311{
    height: 7vh;

    background-color: #dbd3d3;
    border-radius: 5px;
    padding: 1px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .secondDiv312{
    height: 11vh;

    background-color: #dbd3d3;
    border-radius: 5px;
    padding: 10px;
    margin: :5px;
    border: 1px solid;
    border-color: #f7fcfc;

  }
  .buttonpadding{
    padding: 1px;

  }
  .button-width{
    width: 100%;
    padding: 3px;

  }
  .input-width{
    padding: 5px;

  }
  .in {
      width: 78px !important;
  }
  .myfont{
    font-weight: :700;
  }
  input[type="text"]{
    padding: 5px 10px;
     line-height: 20px;
     overflow-y: hidden;

    }
    table {
font-family:"Times New Roman";
    }
    .table1 {
      background-color: white;
      height: 42vh;
      padding: 0px;

    }
    .table2 {
      background-color: white;
      height: 27vh;
      padding: 0px;

    }
    thead {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 1px;
      background-color: #5d5f61;
      height: 20px;

    }
    tbody {
    }

    th {
      color: white;
      border: 1px solid;
      border-color: #f7fcfc;
    }
    .tr1:hover {background-color: #1015b5;color: white;height:10px;}
  </style>
  <style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</head>
<body style="height:100%;">

  <div class="row">
    <div class="col-sm-3 firstDiv">
      <div class="firstDiv1">
        <div class="row">
         <div class="col-md-12">
           <div class="well">Left Top Box</div>
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
    <div class="col-sm-9 firstDiv right">
      <div class="secondDiv1">

      </div>
      <div class="secondDiv2">
          <center>
        <p style="color:#1015b5;font-weight:800;font-size:20px">ORDER LIST</p>
        <center>
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
                <div class="col-sm-6" style="color:#1015b5;font-weight:800;font-size:15px;">
                  PAYMENT CONFIRMATION
                </div>
                <div class="col-sm-6" >
                  <label class="container">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 secondDiv32">.col-sm-4</div>
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
