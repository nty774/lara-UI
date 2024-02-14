// require('./bootstrap');

import ScrollReveal from "scrollreveal";

import Swal from "sweetalert2";
// Import all of Bootstrap's JS
import * as bootstrap from "bootstrap";

let showModel = document.getElementById("showModel");
showModel.addEventListener("click", function () {
    // console.log("San kyi tar par");

    let btnModel = new bootstrap.Modal(
        document.getElementById("btnModel", {
            backdrop: "static",
        })
    );
    btnModel.show();
});

let checkbtn = document.getElementById("checkbtn");
checkbtn.addEventListener("click", function () {
    // console.log("checking");
    // alert("are you suer");
    // confirm("are you sure delete?");
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                },
            });
            Toast.fire({
                icon: "success",
                title: "Signed in successfully",
            });
        }
    });
});

ScrollReveal().reveal(".list-group-item", {
    distance: "30px",
    origin: "top",
    duration: 500,
    interval: 200,
});
