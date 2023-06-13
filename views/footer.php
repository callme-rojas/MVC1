<footer id="main-footer" class="text-white bg-dark mt-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">
                    Copyright &copy; <span id="year"></span> Oozma Kappa
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
// Get the current year for the copyright
$('#year').text(new Date().getFullYear());

// Turn simple editor to modern editor
CKEDITOR.replace('addPostEditor');
</script>