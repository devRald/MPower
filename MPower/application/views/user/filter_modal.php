<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-filter-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Local Area</a>
                    </li>
                    <li class="nav-item">
                        <a id="region-tab" class="nav-link" data-toggle="tab" href="#panel2" role="tab">Region Area</a>
                    </li>
                </ul>
            </div>
            <!--Body-->
            <div class="modal-body">
                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 1-->
                    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                        <form class="range-field">
                            <label for="rad">Radius</label>
                            <input type="range" min="30" max="100" />
                        </form>
                    </div>
                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <label style="margin-bottom: 0px">Region</label>
                        <select class="mdb-select">
                            <option value="" disabled selected>Choose your option</option>
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
                    <!--/.Panel 2-->
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Filter</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- /.Live preview-->