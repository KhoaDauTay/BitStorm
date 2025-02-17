<style>
    .post {
    /* background-color: red; */
    padding: 20px;
    padding-bottom: 0;
    border-radius: 8px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin-top: 20px;
}

.modal-content{
    padding: 10px;
}
.card-post {
    margin: 100px 200px;
}

/* .post-bar {
    margin-bottom: 50px;
} */

.box_search {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius: 8px;
    padding: 10px;
    width: 72.5vw;
    margin: 0 auto;
    position: sticky;
    top: 0px;
    background-color: rgb(104, 104, 254);
    z-index: 1;
}

.search {
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-align: center;
    /* box-shadow: 0.2 2 royalblue; */
}

.search__input {
    font-family: inherit;
    font-size: inherit;
    background-color: #f4f2f2;
    border: none;
    color: #646464;
    padding: 0.7rem 1rem;
    border-radius: 30px;
    width: 100%;
    transition: all ease-in-out .5s;
    margin-right: -2rem;
}

/* bài viết */
.avt-post {
    width: 40px !important;
    height: 40px !important;
    border-radius: 50%;
    background-color: #ccc;
}
#abc {
    width: 40px !important;
    height: 40px !important;
    border-radius: 50%;
    background-color: #ccc;
}



.post-row1 {
    display: flex;
}

.post-name p {
    margin: 0;
}

.name-user {
    font-weight: 400;
    font-size: 20px;
}

.hours-posted {
    font-size: 16px;
    color: #aaa;
}

.content-post {
    margin: 10px 0px;
}

.emotion {
    display: flex;
    align-items: center;
}

    .emotion i {
        font-size: 34px;
        padding-left: 10px;
    }
/* comment */
.post-comment {
    display: flex;
}

.post-content-comment {
    display: inline-block;
    border-radius: 10px;
    background-color: rgb(200, 228, 255);
    padding: 0.5em 0;
}

    .post-content-comment p {
        margin-bottom: 0;
        padding: 0 1em;
    }


        .post-content-comment p:last-child {
            /* width: 60vw; */
            max-width: 60vw;
            word-break: break-all;
        }
/* add iccon love */
.con-like {
    --red: rgb(255, 54, 54);
    position: relative;
    width: 34px;
    height: 34px;
}

    .con-like .like {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 20;
        cursor: pointer;
    }

    .con-like .checkmark {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .con-like .outline,
    .con-like .filled {
        fill: var(--red);
        position: absolute;
    }

    .con-like .filled {
        animation: kfr-filled 0.5s;
        display: none;
    }

    .con-like .celebrate {
        position: absolute;
        animation: kfr-celebrate 0.5s;
        animation-fill-mode: forwards;
        display: none;
    }

    .con-like .poly {
        stroke: var(--red);
        fill: black;
    }

    .con-like .like:checked ~ .checkmark .filled {
        display: block
    }

    .con-like .like:checked ~ .checkmark .celebrate {
        display: block
    }

@keyframes kfr-filled {
    0% {
        opacity: 0;
        transform: scale(0);
    }

    50% {
        opacity: 1;
        transform: scale(1.2);
    }
}

@keyframes kfr-celebrate {
    0% {
        transform: scale(0);
    }

    50% {
        opacity: 0.8;
    }

    100% {
        transform: scale(1.2);
        opacity: 0;
        display: none;
    }
}
/* add comment */
.name-post {
    font-weight: 500;
}
/* Input container */
.input-add-comment {
    position: relative;
    /* margin: 20px; */
    margin-top: 30px;
}

/* Input field */
.input-field {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #ccc;
    outline: none;
    background-color: transparent;
}
.input-add-comment button {
/*    pointer-events: none;
    transition: all 0.3s ease;*/
    background: #fff;
    border: none;
    outline: none;
    color: #007bff;
    position: relative;
    top: -30px;
    left: 88%;
    font-size: 16px;

}
/* Input label */
    .input-label {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 16px;
    /*color: rgba(204, 204, 204, 0);*/
    pointer-events: none;
    transition: all 0.3s ease;
}

/* Input highlight */
.input-highlight {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 0;
    background-color: #007bff;
    transition: all 0.3s ease;
}

/* Input field:focus styles */
.input-field:focus + .input-label  {
    top: -20px;
    font-size: 12px;
    color: #007bff;
}
.input-field:focus button {

    color: #007bff;
}

    .input-field:focus + .input-label + .input-highlight {
        width: 100%;
    }

/* end coment */
/* end */

/* header modal */

.modal-header {
    display: flex;
    justify-content: center;
    align-items: center;
    /* margin-bottom: 20px;  */
    padding: 0;
}

    .modal-header .title {
        background-image: linear-gradient(to right, #002bff, #87cefa);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        font-weight: bold;
    }

    .modal-header .close {
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
    }
/* end header */
/* body modal */
.status-post-user {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.3em 0.5em;
    border-radius: 10px;
    background-color: rgba(205, 182, 182, 0.314);
    /* opacity: 0.5; */
}
/* The switch - the box around the anonymous-slider */
.switch {
    font-size: 12px;
    position: relative;
    display: inline-block;
    width: 3.5em;
    height: 2em;
}

    /* Hide default HTML checkbox */
    .switch input {
        width: 0;
        height: 0;
    }

/* The slider */
.anonymous-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    border: 1px solid #adb5bd;
    transition: .4s;
    border-radius: 30px;
}

    .anonymous-slider:before {
        position: absolute;
        content: "";
        height: 1.4em;
        width: 1.4em;
        border-radius: 20px;
        left: 0.27em;
        bottom: 0.25em;
        background-color: #adb5bd;
        transition: .4s;
    }

input:checked + .anonymous-slider {
    background-color: #007bff;
    border: 1px solid #007bff;
}

input:focus + .anonymous-slider {
    box-shadow: 0 0 1px #007bff;
}

input:checked + .anonymous-slider:before {
    transform: translateX(1.4em);
    background-color: #fff;
}

.avt-name-modal {
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.content-modal {
    border: none;
    outline: none;
    resize: none;
    overflow: hidden;
    width: 100%;
}

    .content-modal:focus {
        border: none;
    }
/* end */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    /* width: 100%; */
    /* height: 100%; */
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

#model_post{
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #ccc;
    width: 40%;
}

    #model_post button {
        font-size: 17px;
        padding: 0.5em 1.5em;
        border: transparent;
        box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
        background: linear-gradient(to right, #002bff, #87cefa);
        color: rgb(0, 0, 0);
        border-radius: 4px;
        margin: 0px 4px;
        width: 100%;
        font-weight: 500;
    }
.switch input[type="checkbox"]{
    width:100%;
    height:20px;    
}
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

.icon_comment {
    width: 5px !important;
}
</style>