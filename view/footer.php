<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/5/2022
 * Time: 7:47 AM
 */
?>
</div>
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
    </div>
</div>
<!-- Modal Update/Delete-->
<div class="modal fade" id="upleteModal1" aria-hidden="true" aria-labelledby="upleteModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" onsubmit="return false;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title w-100" id="upleteModalLabel">
                        <strong class="row align-items-start">
                            <div class=" col-sm-1 d-inline ">
                                <i id="upletetitle_icon" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3 d-inline"></i>
                            </div>
                            <div class=" col-sm-10 ps-2">
                                <p id="uplete_title" class="col"></p>
                            </div>
                        </strong>
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div  class="modal-body">
                    <div id="uplete_body" class="mb-3">
                        <label id="uplete_label" class="col-form-label">League Group Name:</label>
                        <input id="uplete_text" type="text" class="form-control">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button id="uplete_btn" class="btn btn-warning" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="upleteModal2" aria-hidden="true" aria-labelledby="upleteModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >
                    <strong class="row align-items-start">
                        <i id="uplete_feedback_icon" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3"></i>
                        <p id="uplete_feedback_title" class="col">Error</p>
                    </strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div  class="modal-body">
                <div id="uplete_feedback_messsage" class="modal-body">
                    Data has been updated successfully
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Error-->
<div class="modal fade" id="succerrModal" aria-hidden="true" aria-labelledby="succerrModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="succerrModalLabel">
                    <strong class="row align-items-start">
                        <i id="succerr_icon" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3"></i>
                        <p id="succerr_title" class="col">Error</p>
                    </strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label id="succerr_label" class="col-form-label">League Group Name:</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Dynamic Double Page Modal-->
<div class="modal fade" id="dSinglePageModal" aria-hidden="true" aria-labelledby="dSinglePageModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" onsubmit="return false">
            <div class="modal-header">
                <h5 class="modal-title w-100" id="dSinglePageModalLabel">
                    <strong class="row align-items-start">
                        <div class=" col-sm-1 d-inline ">
                            <i id="spm_icon" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3 d-inline"></i>
                        </div>
                        <div class=" col-sm-10 ps-2">
                            <p id="spm_title" class="col"></p>
                        </div>
                    </strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="spm_body" class="modal-body">
            </div>
            <div class="modal-footer">
                <button id="spm_btn" type="button" class="btn btn-secondary" ></button>
            </div>
        </form>
    </div>
</div>

<!-- Dynamic Double Page Error-->
<div class="modal fade" id="dDoublePageModal1" aria-hidden="true" aria-labelledby="upleteModall" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title w-100" id="dDoublePageModalLabel">
                    <strong class="row align-items-start">
                        <div class=" col-sm-1 d-inline ">
                            <i id="dpm_icon" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3 d-inline"></i>
                        </div>
                        <div class=" col-sm-10 ps-2">
                            <p id="dpm_title" class="col"></p>
                        </div>
                    </strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form class="modal-content">
                    <div id="dpm_body" class="modal-body">
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button id="dpm_btn" class="btn btn-warning"  onclick="">Update</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dDoublePageModal2" aria-hidden="true" aria-labelledby="upleteModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >
                    <strong class="row align-items-start">
                        <i id="" class="col bx bx-error nav_icon flex-shrink-0 text-danger fs-3"></i>
                        <p id="" class="col">Error</p>
                    </strong>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="" class="modal-body">
                Data has been updated successfully
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete League Group Name</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="col-form-label">Are you sure to delete the following ??</label>
                        <input type="text" class="form-control" disabled>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-warning" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Deleted</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data has been deleted
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="../../assets/js/main.js"></script>
</body>
</html>
