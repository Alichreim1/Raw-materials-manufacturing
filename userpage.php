<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
          rel="stylesheet">
    <link rel="stylesheet" href="./stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Orbitron:wght@400;800&family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
    <script src="./Orders.js"></script>

    <script src="./index.js"></script>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "get_session_data.php",
                success: function(username) {
                    $("#name_label").text(username);
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="table_update.js"></script>

</head>
<body>
<div class="page">
    <aside id="sidebar">
        <div class="top">
            <div class="logo">
                <h4 id="A">A</h4>
                <h2 id="Alliance">Alliance</h2>
            </div>

            <!-- <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div> -->

            <div class="menu" id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </div>
        </div>

        <div class="sidebar">
            <a <!--href="./dashboard.html"-->
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashborad</h3>
            </a>
            <!-- <a href="./customers.html">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Customers</h3>
            </a>
             -->
            </a>
            <a href="#Orders">
                <span class="material-icons-sharp">receipt_long</span>
                <h3>MY Orders</h3>
            </a>

            <a href="./login.html">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>

        </div>


    </aside>


    <!-- /....................................... -->


    <main>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                     menu
                        </span>
                </button>
                <div id="theme">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey,
                            <label id="name_label"></label>
                        </p>
                        <small class="tex-muted">User</small>
                    </div>
                    <div class="profile-pic">
                        <img src="profile.jpg" alt="admin profile photo">
                    </div>
                </div>
            </div>
        </div>
        <h1>Dashboard</h1>
        <div class="date">
            <input type="date">
        </div>
        <h1>Make Request</h1>

        <div class="insights" id="insights">
            <!-- <div class="sales">
                <div>

                    <img src="wood.webp">
                    <div class="middle">
                        <div class="left">
                            <h3>Wood</h3>
                            <h1>$23,480</h1>
                            <label>
                                Quantity: <br/>
                                <input type="number"
                                step="1"
                                />
                            </label>
                        <br/>
                        </div>
                    </div>
                </div>


                    <input type="submit" value="submit" type="button" id="lf" >
            </div> -->
            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>
                    <img src="steel2.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Steel</h3>
                            <h1>$23,480</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="Steel">
                            <input type="hidden" name="status" value="pending">

                            <br/>
                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>
            </form>


            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>

                    <img src="Alaminum.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Alaminum</h3>
                            <h1>$60,480</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="Alaminum">
                            <input type="hidden" name="status" value="pending">
                            <br/>

                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>

            </form>

            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>

                    <img src="glass1.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>glass</h3>
                            <h1>$25,000</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="glass">
                            <input type="hidden" name="status" value="pending">
                            <br/>

                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>

            </form>

            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>

                    <img src="paper1.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Dpaper</h3>
                            <h1>$15,350</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="Dpaper">
                            <input type="hidden" name="status" value="pending">
                            <br/>

                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>

            </form>
            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>

                    <img src="paint1.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Paint</h3>
                            <h1>$28,000</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="Paint">
                            <input type="hidden" name="status" value="pending">
                            <br/>

                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>

            </form>
            <form action="InsertUserItem.php" method="post">
            <div class="sales">
                <div>

                    <img src="plastic1.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Plastic</h3>
                            <h1>$10,500</h1><br/>
                            <label>
                                Quantity: <br/>
                                <input type="number" name="quantity" step="1"/>
                            </label>
                            <input type="hidden" name="prodname" value="Plastic">
                            <input type="hidden" name="status" value="pending">
                            <br/>

                        </div>
                    </div>
                </div>
                <div>

                    <br/>
                    <input type="submit" value="submit" type="button" id="lf">
                </div>

            </div>

            </form>
        </div>

        <!-- ---------End of profit------------- -->
        <!-- ================end of insights ============================= -->

        <div class="Table" id="Orders">
            <h2>Orders</h2>
            <table id="OrderTable">
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
            </table>
            <a href="#">Show All</a>

        </div>


    </main>

</body>
</html>