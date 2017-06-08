<br/><br/><br>
<div class="container">
    <!--Naked Form-->
    <div class="card-block">
        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-envelope"></i> POST EVENT</h3>
            <hr class="m-t-2 m-b-2">
        </div>
        <!--Body-->
        <!--Body-->
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" class="form-control" id="title">
                    <label for="title" class="">Title</label>
                </div>
            </div>
            <div class="col-md-6" style="margin-top:5px">
                <select class="mdb-select" id="category">
                    <option value="" disabled selected>Select Category</option>
                    <option value="Category 1">Category 1</option>
                </select>
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="desc" class="md-textarea"></textarea>
                    <label for="desc">Description</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <i class="fa fa-map-marker prefix"></i>
                    <input type="text" class="form-control" id="venue">
                    <label for="venue" class="">Venue</label>
                </div>
            </div>
            <div class="col-md-4" style="margin-top:5px">
                <select class="mdb-select" id="region">
                    <option value="" disabled selected>Select Region</option>
                    <option value="REGION I">REGION I</option>
                    <option value="REGION II">REGION II</option>
                    <option value="REGION III">REGION III</option>
                    <option value="REGION IV-A">REGION IV-A</option>
                    <option value="REGION IV-B">REGION IV-B</option>
                    <option value="REGION V">REGION V</option>
                    <option value="REGION VI">REGION VI</option>
                    <option value="REGION VII">REGION VII</option>
                    <option value="REGION VIII">REGION VIII</option>
                    <option value="REGION IX">REGION IX</option>
                    <option value="REGION X">REGION X</option>
                    <option value="REGION XI">REGION XI</option>
                    <option value="REGION XII">REGION XII</option>
                    <option value="NCR">NCR</option>
                    <option value="CAR">CAR</option>
                    <option value="ARMM">ARMM</option>
                    <option value="REGION XIII">REGION XIII</option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <i class="fa fa-tag prefix"></i>
                    <input type="number" class="form-control" id="payment">
                    <label for="payment" class="">Payment</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="md-form">
                    <i class="fa fa-calendar prefix"></i>
                    <input data-value="2015/04/20" placeholder="Start Date" type="text" id="sdate" class="form-control datepicker">
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form">
                    <input  placeholder="End Date" type="text" id="edate" class="form-control datepicker">
                </div>
            </div>
        </div>
        <div class="text-xs-center">
            <button id="submit-post" class="btn btn-default">Submit</button>
        </div>
    </div>
    <!--Naked Form-->
</div>