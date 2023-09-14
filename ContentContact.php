<div class="px-20 space-y-4">
<h1 class="text-center text-6xl font-display m-10">You can always <span class="text-zebrakun">contact me</span></h1>
    <form class="flex flex-col space-y-4" method="POST" onsubmit="handleSubmit(event)">
        <label>Name</label>
        <input id="name" type="text" name="name" class="w-1/2 h-[40px] px-3" required>
        <label>Email</label>
        <input id="email" type="email" name="email" class="w-1/2 h-[40px] px-3" required>
        <label>Message</label>
        <textarea id="message" name="message" class="h-[200px] px-3" ></textarea>
        <button type="submit" class="bg-primary p-5">Submit</button>
    </form>
</div>

<script>
    const user_name = document.getElementById("name")
    const user_email = document.getElementById("email")
    const user_message = document.getElementById("message")
    const handleSubmit = (event) => {
        if(message.value === ""){
            alert("Please write a message!")
            event.preventDefault();
        }
    }
</script>
