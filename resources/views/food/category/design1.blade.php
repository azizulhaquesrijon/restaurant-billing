<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
  .headdiv {
  max-height: 200px;
  min-height: 200px;
  padding-top: 2px;
  padding-bottom: 5px;
  padding-left: 10px;
  padding-right: 10px;
}
.headdivinside {
  padding: 10px;
  background-color: #cfc5c4;

}

.taildiv {
min-height: 350px;
padding-top: 5px;
padding-bottom: 2px;
padding-left: 10px;
padding-right: 10px;

}
.taildivinside {
padding: 10px;
background-color: #cfc5c4;

}
.table1 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding: 5px;
  min-height: 120px;
  background-color: white;
  overflow-y: auto;

}

.table2 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding: 5px;
  min-height: 270px;
  background-color: white;
  overflow-y: auto;

}

.tbody1 {
    height: 100px;       /* Just for the demo          */
    overflow-y: auto;    /* Trigger vertical scroll    */
    overflow-x: hidden;  /* Hide the horizontal scroll */
}
.tbody2 {
    overflow-y: auto;    /* Trigger vertical scroll    */
    overflow-x: hidden;  /* Hide the horizontal scroll */
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}
.th1 {
  background-color: blue;
  color: white;
  height:2px;

}
.th2 {
  background-color: #cfc5c4;
  font-size: 15px;

}
.td2 {
  max-height:2px;
  font-size: 15px;
  border-style: ridge;

}
tr:nth-child(even) {
  width: 100%;
  background-color: #dddddd;
}

.head2{
  height: 30px;       /* Just for the demo          */
  background-color: #a89f9e;
  text-align: center;
  font-size: 20px;

}

label {
    /* Other styling... */
    padding: 20px;
    width: 40%;       /* Just for the demo          */
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
    font-size: 20px;

}
.head3input{
  font-size: 20px;
  font-weight: 600;
float:right;
text-align: left;

}


.middiv {
padding: 20px;
background-color: #cfc5c4;
min-height:20px

}



.inner
{
    display: inline-block;
}
  </style>
</head>
<body>

<div class="container-fluid mt-3">

  <div class="row headdiv rounded-1" >
    <div class="col-sm-4 border border-primary headdivinside">
<p>Business Unit</p>
      <table style="width:100%" class="table1">
        <thead>
        <tr>
          <th class="th1">Company</th>

        </tr>
      </thead>

        <tbody class="tbody1">


      </tboady>
      </table>
      </div>
    <div class="col-sm-4 border border-primary headdivinside rounded-1 ">
      <p>Trans List</p>
      <div class="head2">{{date('d-m-Y')}}</div>
      <table style="width:100%" class="table1">
        <thead>
        <tr>
          <th class="th1">Company</th>

        </tr>
      </thead class="tbody1">

        <tbody>


      </tboady>
      </table>
    </div>
    <div class="col-sm-4 border border-primary headdivinside">
      <div>
      <lable style="font-weight: 800;padding-top:50px">Date</label>
        <input class="head3input">
      </div>
      <div>
      <lable style="font-weight: 600;padding-top:50px">Remarks</label>
        <input class="head3input">
      </div>
      <div>
      <lable style="font-weight: 600;padding-top:50px">Approved By</label>
        <input class="head3input" value="{{date('d-m-Y')}}">
      </div>
    </div>
  </div>
  <div class="middiv" id="outer">
    <div class="inner"><button type="submit" class="msgBtn" onClick="return false;" >Receive Expense</button></div>
      <div class="inner"><button type="submit" class="msgBtn2" onClick="return false;">Setup</button></div>
      <div class="inner"><button type="submit" class="msgBtn2" onClick="return false;">Opening</button></div>

  </div>

  <div class="row taildiv">
    <div class="col-sm-4 border border-primary taildivinside">
      <p>Business Unit</p>
            <table style="width:100%" class="table2">
              <thead>
              <tr>
                <th class="th2">Company</th>
                <th class="th2">Contact</th>
              </tr>
            </thead>

              <tbody class="tboady1">


            </tboady>
            </table>
    </div>
    <div class="col-sm-8 border border-primary taildivinside">
      <p>Business Unit</p>
            <table style="width:100%" class="table2 ">
              <thead>
              <tr>
                <th class="th2">Company</th>
                <th class="th2">Contact</th>
                <th class="th2">Country</th>
              </tr>
            </thead>

              <tbody class="tboady2 table">
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>
                <tr>
                  <td >Company</td>
                  <td >Contact</td>
                  <td >Country</td>
                </tr>

                     </tboady>
            </table>
    </div>

  </div>
</div>

</body>
</html>
