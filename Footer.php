<footer class="">
    <div class="flex justify-center bg-primary">
        <h4>&copy; Copyright <span id="todayYear"></span></h4>
    </div>
</footer>

<script>
const currentDate = new Date();
const currentYear = currentDate.getFullYear();
const todayYear = document.getElementById("todayYear");

todayYear.innerText = currentYear;

</script>