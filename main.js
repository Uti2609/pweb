document.addEventListener('DOMContentLoaded', () => {
    new Typed('.text', {
        strings: ['Student', 'Female', 'Beautiful'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    });
});

function validateForm() {
    let name = document.getElementById("name").value.trim();
    let nim = document.getElementById("nim").value.trim();
    let dob = document.getElementById("dob").value.trim();
    let age = document.getElementById("age").value.trim();
    let gender = document.getElementById("gender").value.trim();
    let addressOrigin = document.getElementById("address-origin").value.trim();
    let addressCurrent = document.getElementById("address-current").value.trim();
    let hobby = document.getElementById("hobby").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("email").value.trim();

    // Regular expressions for validation
    let namePattern = /^[a-zA-Z\s]+$/;
    let hobbyPattern = /^[a-zA-Z\s]+$/;
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let numberPattern = /^\d+$/;

    // Check if all fields are filled
    if (!name || !nim || !dob || !age || !gender || !addressOrigin || !addressCurrent || !hobby || !phone || !email) {
        alert("Semua bidang harus diisi.");
        return false;
    }

    // Validate name
    if (!namePattern.test(name)) {
        alert("Nama harus berupa huruf.");
        return false;
    }

    // Validate NIM
    if (!numberPattern.test(nim)) {
        alert("NIM harus berupa angka.");
        return false;
    }

    // Validate phone
    if (!numberPattern.test(phone)) {
        alert("Nomor telepon harus berupa angka.");
        return false;
    }
    
    if (!namePattern.test(hobby)) {
        alert("hobby harus berupa huruf.");
        return false;
    }

    // Validate email
    if (!emailPattern.test(email)) {
        alert("Email tidak valid.");
        return false;
    }

    return true;
}
