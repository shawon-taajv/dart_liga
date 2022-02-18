<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/10/2022
 * Time: 4:28 PM
 */
?>
<div class="row mt-4 mb-3">
    <div class="shadow-lg bg-body">
        <div class="mb-3">
            <ul class="nav nav-pills d-flex flex-row justify-content-start" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link link-success active"  data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="true">
                        <p class="h5">New User</p>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-success" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        <p class="h5">User Profile</p>
                    </button>
                </li>
            </ul>
            <div class="tab-content pt-3" >
                <div class="tab-pane fade show active col-sm-12 p-2" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row mb-3">
                                <div class="shadow-lg bg-body rounded">
                                    <p class="h2 m-3">Add New User</p>
                                    <div class="border p-2 rounded">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">League Identity</label>
                                            <div class="col-sm-7 d-flex text-center">
                                                <button type="button" class="btn btn-success dropdown-toggle text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Group Name
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Flow</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">EC Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Switzerland</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Email</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="email@example.com" aria-label="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Username</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                    <button class="input-group-text" id="basic-addon2">Check!</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-5 col-form-label"></div>
                                            <div class="col-sm-7">
                                                <button type="submit" class="btn btn-success">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="shadow-lg bg-body rounded">
                                    <p class="h2 m-3">Update User</p>
                                    <div class="border p-2 rounded">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">League Identity</label>
                                            <div class="col-sm-7 d-flex text-center">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Group Name
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Flow</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">EC Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Switzerland</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Email</label>
                                            <div class="col-sm-7 d-flex text-center">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Email
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">abc@example.com</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">xyz@example.com</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">test@example.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Username</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                    <button class="input-group-text" id="basic-addon2">Check!</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-5 col-form-label"></div>
                                            <div class="col-sm-7">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="shadow-lg bg-body rounded">
                                    <p class="h2 m-3">Delete User</p>
                                    <div class="border p-2">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">League Identity</label>
                                            <div class="col-sm-7 d-flex text-center">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Group Name
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Flow</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">EC Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Switzerland</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Email</label>
                                            <div class="col-sm-7 d-flex text-center">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-group-lg text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select Email
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item" href="#">abc@example.com</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">xyz@example.com</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">test@example.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Username</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-5 col-form-label"></div>
                                            <div class="col-sm-7">
                                                <button type="submit" class="btn btn-success">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 ms-3">
                                <div class="shadow-lg bg-body rounded">
                                    <p class="h2 m-3">User Table</p>
                                    <div class="border p-4">
                                        <table id="example2" class="table table-striped table-responsive dt-responsive " style="cursor:pointer;width:100%">
                                            <thead >
                                            <tr >
                                                <th>League Name</th>
                                                <th>Entry Date</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Upate/Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flow-Summer-01</td>
                                                <td>02/27/2021</td>
                                                <td>tom@username.com</td>
                                                <td>Tom0709</td>
                                                <td >
                                                    <div class="">
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-edit-alt' ></i>
                                                        </button>
                                                        <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                            <i class='bx bx-x'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade col-sm-12 p-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="row m-1">
                                <div class="shadow-lg bg-body rounded p-1">
                                    <p class="h2 m-3">Update User Profile</p>
                                    <div class="border p-2 rounded">
                                        <div class="row mb-3">
                                            <div class="col-sm-4 col-form-label ">
                                                <div class="border rounded m-2 " style="min-height:100px; height: 100%;">
                                                    <img id="profileImage" class="img-thumbnail" style="width:100%; height: 100%;object-fit: fill;">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 d-flex align-items-end justify-content-end"">
                                            <div class="col">
                                                <div class="row">
                                                    <label class="form-label">Choose profile image</label>
                                                </div>
                                                <div class="row w-100">
                                                    <input class="form-control align-bottom" type="file" style="margin-left: 12px;" onchange="filechooser(this,profileImage)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">First Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="first-name" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="last-name" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Full Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="full-name" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Address</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" placeholder="Address" style="resize: none; overflow:hidden" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Country</label>
                                        <div class="col-sm-8 d-flex text-center">
                                            <button type="button" class="btn btn-success dropdown-toggle text-start" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Country
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                <li>
                                                    <a class="dropdown-item" href="#">Flow</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">EC Info</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Switzerland</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="email@example.com" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="phone" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4 col-form-label"></div>
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row m-1">
                            <div class="shadow-lg bg-body rounded p-1">
                                <p class="h2 m-3">User  Profile Table</p>
                                <div class="border p-4">
                                    <table id="example3" class="table table-striped table-responsive dt-responsive " style="cursor:pointer;width:100%">
                                        <thead >
                                        <tr >
                                            <th>League Name</th>
                                            <th>Entry Date</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Upate/Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flow-Summer-01</td>
                                            <td>02/27/2021</td>
                                            <td>tom@username.com</td>
                                            <td>Tom0709</td>
                                            <td >
                                                <div class="">
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-edit-alt' ></i>
                                                    </button>
                                                    <button class="d-inline-flex input-group-text" onclick="spinnerInputPlus(this)">
                                                        <i class='bx bx-x'></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
