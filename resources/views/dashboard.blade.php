<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Webpage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>ERP <span class="primary">Swiss</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined"> close </span>
                </div>
            </div>

            <div class="sidebar">
                @foreach($menu as $data)
                    <a href="{{ $data->url }}">
                        <span class="material-symbols-outlined">grid_view</span>
                        <h3>{{ $data->menu_name }}</h3>
                    </a>
                @endforeach
           
                <a href="#">
                    <span class="material-symbols-outlined"> logout </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>

                <div class="date">
                    <input type="date" value="{{ date('Y-m-d') }}">     
                </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">trending_up</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,023</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
            

                <div class="expenses">
                    <span class="material-symbols-outlined">local_mall</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Expenses</h3>
                            <h1>$5,004</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">20%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
    


                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Income</h3>
                            <h1>$20,018</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 hours</small>
                </div>
            </div>

            <div class="recent-order">
                <h1>Recent Order</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payments</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Sceptre Curved</td>
                                <td>119</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Razer Blackshark</td>
                                <td>30</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Razer Basilisk V3</td>
                                <td>40</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </main>

        <div class="right">
            <div class="top">
                    <button id="menu-bar">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p><b>Leoh</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>

                    <div class="profile-photo">
                        <img src="https://i.postimg.cc/k5kz0TjQ/1381511-588644811197844-1671954779-n.jpg" alt="image">
                    </div>
                </div>
            </div>

            <div class="recent-updates">
                <h2>Recent Updates</h2>

                <div class="updates">

                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://i.postimg.cc/yxv0CY18/profile-2.jpg" alt="image">
                        </div>
                        <div class="message">
                            <p><b>Gol</b> Received his order</p>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://i.postimg.cc/Nfj17TD9/profile-3.jpg" alt="image">
                        </div>
                        <div class="message">
                            <p><b>Monza</b> Received her order</p>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="https://i.postimg.cc/YqvvCx83/profile-4.jpg" alt="image">
                        </div>
                        <div class="message">
                            <p><b>Ferrari</b> Received her order</p>
                        </div>
                    </div>
                
                </div>
            </div>

            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item onlion">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>

                    <div class="right-text">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last seen 2 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>

                <div class="item onlion">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>

                    <div class="right-text">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last seen 3 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>

                <div class="item onlion">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>

                    <div class="right-text">
                        <div class="info">
                            <h3>Online Orders</h3>
                            <small class="text-muted">Last seen 3 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
            </div>

            <div class="item add-products">
                <div>
                    <span class="material-symbols-outlined">add</span>
                </div>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>
<script>
const sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu-bar');
const closeBtn = document.querySelector('#close-btn');

const themeToggler = document.querySelector('.theme-toggler');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = "block";
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = "none";
})

themeToggler.addEventListener('click', () => {

    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})
</script>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
<style>
:root {
    --clr-primary: #7380ec;
    --clr-danger: #ff7782;
    --clr-success: #41f1b6;
    --clr-white: #fff;
    --clr-info-dark: #7d8da1;
    --clr-info-light: #dce1eb;
    --clr-dark: #363949;
    --clr-warning: #ff4edc;
    --clr-light: rgba(132, 139, 200, 0.18);
    --clr-primary-variant: #111e88;
    --clr-dark-variant: #677483;
    --clr-color-background: #f6f6f9;
  
    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-radius-2: 0.8rem;
    --border-radius-3: 1.2rem;
  
    --card-padding: 1.8rem;
    --padding-1: 1.2rem;
    --box-shadow: 0 2rem 3rem var(--clr-light);
  
}

.dark-theme-variables {
    --clr-color-background: #181a1e;
    --clr-white: #202528;
    --clr-light: rgba(0, 0, 0, 0.4);
    --clr-dark: #edeffd;
    --clr-dark-variant: #677483;
    --box-shadow: 0 2rem 3rem var(--clr-light)
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    list-style: none;
    appearance: none;
}

body{
    font-family: 'Poppins', sans-serif;
    width: 100vw;
    height: 100vh;
    font-size: .88rem;
    user-select: none;
    overflow-x: hidden;
    background: var(--clr-color-background);
}

.container{
    display: grid;
    grid-template-columns: 14rem auto 14rem;
    width: 96%;
    gap: 1.8rem;
    margin: 0 auto;
}

a{ color: var(--clr-dark);}

h1{
    font-weight: 800;
    font-size: 1.8rem;
}

h2{ font-size: 1.4rem;}

h3{ font-size: .87rem;}

h4{ font-size: .8rem;}

h5{ font-size: .77rem;}

small{ font-size: .75rem;}

.profile-photo img{
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 50%;
    overflow: hidden;
}

.text-muted{ color: var(--clr-info-dark);}

p{ color: var(--clr-dark-variant);}

b{ color: var(--clr-dark);}

.primary{ color: var(--clr-primary);}

.primary-variant{ color: var(--clr-primary-variant);}

.success{ color: var(--clr-success);}

.danger{ color: var(--clr-danger);}

.warning{ color: var(--clr-warning);}

/*ASIDE*/

aside{ height: 100vh;}

    aside .top{
        background-color: var(--clr-white);
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1.4rem;
    }

        aside .top div.close span{ 
            display: none;
            cursor: pointer;
        }

    aside .logo{
        display: flex;
        gap: 1rem;
    }

    aside .sidebar{
        background-color: var(--clr-white);
        display: flex;
        flex-direction: column;
        height: 85vh;
        position: relative;
        top: 1rem;
    }

        aside .sidebar a{
            display: flex;
            color: var(--clr-info-dark);
            margin-left: 2rem;
            gap: 1rem;
            align-items: center;
            height: 3.2rem;
            transition: all .1s ease-in;
        }

            aside .sidebar a:hover{color: var(--clr-primary);}

                aside .sidebar a:hover span{ 
                    margin-left: 1rem;
                    transition: .4s ease;
                }

            aside .sidebar a span{
                font-size: 1.6rem;
                transition: all .1s ease-in;
            }

                aside .sidebar a span.msg-count{
                    background: var(--clr-danger);
                    color: var(--clr-white);
                    padding: 2px 5px;
                    font-size: 11px;
                    border-radius: var(--border-radius-1);
                }

            aside .sidebar a:last-child{
                position: absolute;
                bottom: 1rem;
                width: 100%;
            }

            aside .sidebar a.active{
                background: var(--clr-light);
                color: var(--clr-primary);
                margin-left: 0;
                /* border-left: 5px solid var(--clr-primary); */
            }

                aside .sidebar a.active::before{
                    content: '';
                    width: 6px;
                    height: 100%;
                    background-color: var(--clr-primary);
                }

    aside h3{ font-weight: 400;}

/*MAIN*/

main{
    margin-top: 1.4rem;
    width: auto;
}

main input{
    background-color: transparent;
    border: none;
    outline: none;
    color: var(--clr-dark);
}

main .date{
    display: inline-block;
    background-color: var(--clr-white);
    border-radius: var(--border-radius-1);
    margin-top: 1rem;
    padding: 0.5rem 1.6rem;
}

main .insights{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.6rem;
}

    main .insights > div{
        background-color: var(--clr-white);
        padding: var(--card-padding);
        border-radius: var(--card-border-radius);
        margin-top: 1rem;
        box-shadow: var(--box-shadow);
        transition: all .3s ease;
    }

        main .insights > div:hover{ box-shadow: none;}

        main .insights > div span{
            background: coral;
            padding: 0.5rem;
            border-radius: 50%;
            color: var(--clr-white);
            font-size: 2rem;
        }

            main .insights > div.expenses span{ background: var(--clr-danger);}

            main .insights > div.income span{ background: var(--clr-success);}
    
        main .insights > div .middle{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

            main .insights > div .middle h1{ color: var(--clr-dark);}

        main .insights h1{ color: var(--clr-dark);}

        main .insights h3 { color: var(--clr-dark);}

        main .insights p{ color: var(--clr-dark);}

        main .insights .progress{
            position: relative;
            height: 68px;
            width: 68px;
            border-radius: 50px;
        }

            main .insights .progress .number{
                position: absolute;
                top: 5%;
                left: 5%;
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

        main .insights svg{
            height: 150px;
            position: absolute;
            top: 0;
        }

            main .insights svg circle{
                fill: none;
                stroke: var(--clr-primary);
                transform: rotate(270, 80, 80);
                stroke-width: 5;
            }
        
        main .insights .sales svg circle{
            stroke-dashoffset: 10;
            stroke-dasharray: 150;
        }

        main .insights .expenses svg circle{
            stroke-dashoffset: 0;
            stroke-dasharray: 150;
        }

        main .insights .income svg circle{ stroke: var(--clr-success)}

main h1{ color: var(--clr-dark);}

main .recent-order{ margin-top: 2rem;}

    main .recent-order h1{ color: var(--clr-dark);}

    main .recent-order table{
        background-color: var(--clr-white);
        width: 100%;
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
        text-align: center;
        box-shadow: var(--box-shadow);
        transition: all .3s ease;
        color: var(--clr-dark);
    }

        main .recent-order table:hover{ box-shadow: none;}

    main .recent-order a{
        text-align: center;
        display: block;
        margin: 1rem;
    }
    
main table tbody tr{
    height: 3.8rem;
    border-bottom: 1px solid var(--clr-white);
    color: var(--clr-dark-variant);
}

    main table tbody tr:last-child td{ border: none;}

main table tbody td{
    height: 3.8rem;
    border-bottom: 1px solid var(--clr-dark);
}

/*RIGHT*/

.right{ margin-top: 1.4rem;}

    .right h2{ color: var(--clr-dark);}

    .right .top{
        display: flex;
        justify-content: start;
        gap: 2rem;
    }

        .right .top button{ display: none;}

        .right .top .profile{
            display: flex;
            gap: 2rem;
            text-align: center;
        }

    .right .theme-toggler{
        background-color: var(--clr-white);
        display: flex;
        justify-content: space-between;
        height: 1.6rem;
        width: 4.2rem;
        cursor: pointer;
        border-radius: var(--border-radius-1);
    }

        .right .theme-toggler span{
            font-size: 1.2rem;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

            .right .theme-toggler span.active{
                background-color: var(--clr-primary);
                color: var(--clr-white);
            }

    .right .info h3{ color: var(--clr-dark);}

    .right .recent-updates{
        margin-top: 1rem;
        margin-left: -20px;
    }

        .right .recent-updates .updates{
            background-color: var(--clr-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            box-shadow: var(--box-shadow);
            transition: all .3s ease;
        }

            .right .recent-updates .updates:hover{ box-shadow: none;}

        .right .recent-updates .update{
            display: grid;
            grid-template-columns: 2.6rem auto;
            gap: 1rem;
            margin-bottom: 1rem;
        }

    .right .sales-analytics{ margin-top: 2rem;}

        .right .sales-analytics .item{
            background-color: var(--clr-white);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            margin: 10px 0;
            width: 100%;
            margin-bottom: .8rem;
            padding: 1.4rem var(--card-padding);
            border-radius: var(--border-radius-3);
            box-shadow: var(--box-shadow);
            transition: all .3s ease;
        }

            .right .sales-analytics .item:hover{ box-shadow: none;}

            .right .sales-analytics .item .icon{
                background: coral;
                padding: 0.6rem;
                color: var(--clr-white);
                border-radius: 50%;
                height: 50px;
                width: 50px;
                line-height: 50px;
                align-items: center;
            }

                .right .sales-analytics .item:nth-child(3) .icon{ background-color: var(--clr-success);}

                .right .sales-analytics .item:nth-child(4) .icon{ background-color: var(--clr-danger);}
    
    .right .add-products div{
        display: flex;
        height: 60px;
        width: 100%;
        text-align: center;
        justify-content: center;
        align-items: center;
        border: 2px dashed;
        color: var(--clr-dark-variant);
        margin-bottom: 40px;
    }

/*MEDIA QUERIES*/

@media screen and (max-width: 1200px){
    .container{
        width: 94%;
        grid-template-columns: 7rem auto 14rem;
    }

    aside .sidebar h3{ display: none;}

    aside .sidebar a:last-child{
        position: relative;
        margin-top: 1.8rem;
    }

    aside .sidebar a:hover span.msg-count{ display: none;}

    main .insights{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }

}

@media screen and (max-width: 840px){
    .container{
        width: 100%;
        grid-template-columns: repeat(1, 1fr);
    }

    aside .logo h2{
        display: inline;
    }

    aside{
        position: fixed;
        width: 18rem;
        z-index: 3;
        background: var(--clr-white);
        display: none;
        left: -100px;
        animation: menuAni 1s forwards;
    }

    @keyframes menuAni{
        to{ left: 0;}
    }

        aside .sidebar h3{
            display: inline;
        }

        aside .sidebar a:hover span.msg-count{ display: inline;}

        aside .sidebar a{
            width: 100%;
            height: 3.4rem;
        }

        aside .top div.close span{
            display: inline;
            position: absolute;
            right: 0;
            margin-right: 30px;
            font-size: 35px;
        }

    .right .top{
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 0.8rem;
        background: var(--clr-white);
        width: 100%;
        height: 4.6rem;
        z-index: 2;
        box-shadow: 0 1rem 1rem var(--clr-white);
        margin: 0;
    }

        .right .top button{
            display: inline-block;
            background: transparent;
            cursor: pointer;
            color: var(--clr-dark);
            position: absolute;
            left: 1rem;
        }

    main .insights{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.6rem;
        padding: 48px;
    }

    main .recent-order{
        padding: 30px;
        margin: 0 auto;
    }

        main .recent-order h1{ text-align: center;}

    .right .profile{
        position: absolute;
        left: 70%;
    }

    .right .recent-updates{ padding: 30px;}

        .right .recent-updates h2{ 
            text-align: center;
            margin-bottom: 1rem;
        }

    .right .sales-analytics{ padding: 30px;}

        .right .sales-analytics h2{
            text-align: center;
            margin-bottom: 1rem;
        }

    .add-products{ padding: 30px;}

}

</style>