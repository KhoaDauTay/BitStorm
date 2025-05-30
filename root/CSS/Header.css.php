<style>
            /* CSS cho thanh navbar */
header .navbar{
    height:auto;
    margin-bottom:40px;
}
body {
    font-family: "Inter", sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffffff;
    height: 50px;
    padding: 0 50px;
}

.navbar-left {
    display: flex;
    align-items: center;
}

.logo {
    width: 56px;
    height: 56px;
}

.group-name {
    font-size: 24px;
    background-image: linear-gradient(to right, #002bff, #87cefa);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    margin-left: 10px;
}

.navbar-center {
    display: flex;
    
}

.navbar-center-a {
    margin: 0 12px;
    font-size: 20px;
    color: black;
    position: relative;
    text-decoration: none;
}

.navbar-center-a:hover {
    text-decoration: none;
    text-decoration-line: none;
    color: #0A3567;
    font-weight: 500s;
    /* box-shadow: 0 2px dodgerblue; */

}

.current-page {
    box-shadow: 0 2px dodgerblue;
    color: #0A3567;
    font-weight: bold;
    padding: 0 5px;
}

.navbar-right {
    display: flex;
    align-items: center;
}
/* li {
    list-style-type:none;
} */
.btn-header {
    font-size: 17px;
    padding: 0.5em 1.5em;
    border: transparent;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    background: dodgerblue;
    color: rgb(0, 0, 0);
    border-radius: 4px;
    margin: 0px 4px;
}

    .btn-header:hover {
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(30,144,255,1) 0%, rgba(0,212,255,1) 100%);
    }

    .btn-header:active {
        transform: translate(0em, 0.2em);
    }

.btn-register {
    background: rgb(138, 192, 245);
}

/* FOOTER */

/* Định dạng cho footer */
.footer {
    background-color: #f8f9fa;
    padding: 20px;
    margin-top: 100px;
}

.logo-footer {
    width: 40%;
}
/* Định dạng cho tên */
.group-name-footer {
    text-align: left;
    font-size: 30px;
    font-weight: bolder;
    background-image: linear-gradient(to right, #002bff, #87cefa);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    margin-left: 10px;
}
.footer-col {
    padding: 10px;
    text-align: center;
}
/* Định dạng cho icon */
.social-icon {
    color: #007bff;
    margin: 5px;
}
/* Định dạng cho các tiêu đề của cột */
.column-title {
    color: #007bff;
    font-size: 20px;
    margin-bottom: 20px;
}

p.column-text {
    padding: 5px;
    margin: 0px;
}
/* Định dạng cho các đoạn văn bản của cột */
.column-text {
    color: #000;
    font-size: 16px;
}

.footer-contact > p {
    padding: 5px;
    margin: 0px;
}
/* Định dạng cho các icon */
.contact-icon {
    color: #007bff;
    margin-right: 5px;
}

.footer-row2 {
    display: flex;
    justify-content: space-between;
}
</style>