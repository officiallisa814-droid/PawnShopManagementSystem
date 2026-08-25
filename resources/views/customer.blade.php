<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
        integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <title>Customer</title>
</head>

<body>
    <div class="pageLayout">

        <!--================= Sidebar===================  -->
        <aside class="sidebar">
            <div class="bar">
                <div class="topMenu">
                    <h2>Pawn System</h2>
                    <ul>
                        <li><a href="{{route('dashboard')}}"><i class="fa-solid fa-house iconHide"></i> Dashboard</a></li>
                        <li><a href=""><i class="fa-solid fa-people-roof iconHide"></i> Customer</a></li>
                        <li><a href=""><i class="fa-solid fa-layer-group iconHide"></i> Pawn Item</a></li>
                        <li><a href=""><i class="fa-solid fa-box iconHide"></i> Item Appraisal</a></li>
                        <li><a href=""><i class="fa-solid fa-landmark iconHide"></i> Loan cintract</a></li>
                    </ul>
                </div>

                <div class="bottomMenu">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-gear iconHide"></i> Settings</a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket iconHide"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </aside>


        <!-- ======================= Main ============================= -->
        <div class="main">
            <header class="box-header">
                <h2>Customer</h2>
                <div class="search-box">
                    <i class="fa-solid fa-circle-user"></i>
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="search" placeholder="Search">
                </div>
            </header>

<!-- ======================box add new customer====================== -->
            <section class="box">
                <div class="customer-directory-bar">
                    <h2>Customer Directory</h2>
                        <div class="left-bar">
                    </div>
                    <div class="right-bar">
                        <button class="btn-add-customer">+ Add New Customer</button>
                        <button class="btn-view-blacklist">View Blacklist</button>
                        <button class="btn-export-report">Export Report</button>
                    </div>
                </div>
            </section>

<!-- ============================== Pop-up Layout ======================== -->
    <div class="popup">
        <!-- ==============================Pop header================= -->
        <h4>Add a New Customer</h4>
        <hr style="background-color: #ffd001; height: 1px; border: none;">

        <div class="layout-upload">
            <div class="layout-photo">
                <p>Upload Profile Photo</p><br>
                <input type="file" class="upload-photo" name="upload-photo" placeholder="drop-photo">
            </div>
            
            <div class="layout-name">
                <p>Full Name (Khmer/English) <span style="color: red;">*</span></p><br>
                <input type="text" class="input-fullName" name="full-name" placeholder="Full Name">

                <div class="grid-layout-id">
                    <div class="passport-type">
                        <p>ID/Passport Type</p><br>
                        <select class="national-id" name="national-id" id="">
                            <option value="">National ID</option>
                            <option value="">Cambodia</option>
                            <option value="">China</option>
                            <option value="">America</option>
                        </select>
                    </div>

                    <div class="passort-number">
                    <p>ID/Passport Number</p><br>
                        <input type="text" class="passport-num"   name="passport-num" placeholder="ID Passport">
                    </div>
                </div>

            </div>
        </div>
        <hr style="background-color: #ffd001; height: 1px; border: none;">


        <!-- ============================== Pop center ID================= -->
         <div class="layout-id">
            <div class="id-date">
                <p>ID Expiry Date</p><br>
                <input type="date" class="date" name="date"><br>
                <br>
                <p>Phone Number1</p><br>
                <input type="number" name="phone-num1" class="phone-num1" placeholder="Phone Number 1"><br>
            </div>

            <div class="id-upload">
                <p>ID Image Upload</p><br>
                <input type="file" class="upload-file" name="upload-file"><br>
                <br>
                <p>Phone Number2</p><br>
                <input type="number" name="phone-num2"
                class="phone-num2" placeholder="Phone Number 2"><br>
            </div>
         </div>

         <!--==================== Home Address =================  -->
         <div class="layout-home-address">
            <p>Home Address</p><br>
            <input type="address" name="address" class="address" placeholder="Home Address">
         </div>

         <!-- ================================Emergency Contact Name ============-->

         <div class="grid-layout-emergency">
            <div class="emergency-name">
                <p>Emergency Contact Name</p><br>
                <input type="text" name="emer-name" class="emer-name" placeholder="Emergency Name"><br>

                <p>Initial Pawn Amount (option)</p><br>
                <button class="btn-money">$0.00</button>

                <p>Note</p>
                    <input type="text" class="note" name="note" placeholder="note">
            </div>

            <div class="emergency-phone">
                <p>Emergency Contact Phone</p><br>
                <input type="text" name="emer-phone" class="emer-phone" placeholder="Emergency Phone"><br>

                <p>Initial Pawn Amount (option)</p><br>
                <select name="item" class="item">
                    <option value="">Select Item Type</option>
                    <option value="">Select Item Type</option>
                    <option value="">Select Item Type</option>
                </select>
            </div>
         </div>
            <br>
         <!-- ====================Footer Pup=============== -->
          <div class="footer-pup">
                <div>
                    
                </div>
                
                <div>
                    <button class="btn-cancel">Cancel</button>
                    <button class="btn-save">Save</button>
                </div>
          </div>
    </div>

    <!-- ============================= Java Alert Pup================= -->
    <script>
        const btnOpen = document.querySelector('.btn-add-customer');
        const popup = document.querySelector('.popup');
        const btnCancel = document.querySelector('.btn-cancel');

        btnOpen.addEventListener('click', (event)=>{
            popup.style.display= 'block';
            event.stopPropagation();
        });

        btnCancel.addEventListener('click', ()=>{
            popup.style.display= 'none';
        });

        // window.addEventListener('click', (event) => {
        // // If the pop-up is currently visible AND the user clicked something that is NOT inside the pop-up box...
        // if (popup.style.display === 'block' && !popup.contains(event.target)) {
        //     popup.style.display = 'none'; // Hide it!
        // }
        // });
    </script>

<!-- ============================== Table show customer ======================== -->
            <section class="customer-box">
                <h3>Customer Directory</h3>
                <p>Search Affiars Quenes, number, artire, Pledges</p>

                <div class="search-customer">
                    <input type="text" class="search-customers" name="search-customers" placeholder="Search">

                    <select name="select" id="select">
                        <option value="">Filters</option>
                        <option value="">sort A to Z</option>
                        <option value="">sort Z to A</option>
                    </select>

                    <input type="checkbox"><label for="">Layout Filters</label>
                </div>
                <br>

                <div class="customer-table">
                    <h3>Customer Lists</h3>
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>ID/Passort</td>
                            <td>Phone</td>
                            <td>Active Pledges</td>
                            <td>Status</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Chhonglisa</td>
                            <td>123456</td>
                            <td>088 4335 181</td>
                            <td>10</td>
                            <td><button class="btn-active">Active</button></td>
                        </tr>
                    </table>
                </div>
            </section>

        </div>

    </div>

</body>

</html>