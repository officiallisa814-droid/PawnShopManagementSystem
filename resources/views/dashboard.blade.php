<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
        integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <title>dashboard</title>
</head>

<body>
    <div class="pageLayout">

        <!--================= Sidebar===================  -->
        <aside class="sidebar">
            <div class="bar">
                <div class="topMenu">
                    <h2>Pawn System</h2>
                    <ul>
                        <li><a href=""><i class="fa-solid fa-house iconHide"></i> Dashboard</a></li>
                        <li><a href="{{ route('customer') }}"><i class="fa-solid fa-people-roof iconHide"></i> Customer</a></li>
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


        <!--======================= Main ============================= -->
        <main class="main">
            <header class="box-header">
                <h2>Dashboard Home Page</h2>
                <div class="search-box">
                    <i class="fa-solid fa-circle-user"></i>
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="search" placeholder="Search">
                </div>
            </header>


            <section class="box">
                <h2>Welcome, Customer</h2>
                <div class="cards">
                    <div class="card">
                        <h2>Total Customers</h2>
                        <h3>200 users</h3>
                        <p>200 users</p>
                    </div>

                    <div class="card">
                        <h2>Active Pawn Contracts</h2>
                        <h3>100</h3>
                        <!-- <p>200 users</p> -->
                    </div>

                    <div class="card">
                        <h2>Expired Contracts</h2>
                        <h3>20</h3>
                        <!-- <p>200 users</p> -->
                    </div>

                    <div class="card">
                        <h2>Items Ready for Auction</h2>
                        <h3>30</h3>
                        <!-- <p>200 users</p> -->
                    </div>
                </div>
            </section>

            <section class="graphBoard">
                <div class="cards-two">
                    <div class="card">
                        <h2>Total Customers</h2>
                        <h3>200 users</h3>
                        <p>200 users</p>
                        <p>200 users</p>
                    </div>

                    <div class="card">
                        <h2>Items Ready for Auction</h2>
                        <h3>30</h3>
                        <!-- <p>200 users</p> -->
                    </div>
                    <div class="card">
                        <h2>Total Customers</h2>
                        <h3>200 users</h3>
                        <p>200 users</p>
                        <p>200 users</p>
                    </div>

                    <div class="card">
                        <h2>Items Ready for Auction</h2>
                        <h3>30</h3>
                        <!-- <p>200 users</p> -->
                    </div>
                    <div class="card">
                        <h2>Total Customers</h2>
                        <h3>200 users</h3>
                        <p>200 users</p>
                        <p>200 users</p>
                    </div>

                    <div class="card">
                        <h2>Items Ready for Auction</h2>
                        <h3>30</h3>
                        <!-- <p>200 users</p> -->
                    </div>
                </div>
            </section>
            <section class="graphBoard">
                <div class="cards-two">
                    <div class="card">
                        <h2>Total Customers</h2>
                        <h3>200 users</h3>
                        <p>200 users</p>
                        <p>200 users</p>
                        <p>200 users</p>
                    </div>

                    <div class="card">
                        <h2>Items Ready for Auction</h2>
                        <h3>30</h3>
                        <!-- <p>200 users</p> -->
                    </div>
                </div>
            </section>
        </main>

    </div>

</body>

</html>