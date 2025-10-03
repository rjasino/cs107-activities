<div>
    <!-- He who is contented is rich. - Laozi -->
    <form action="/customers" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password_hash" required>
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">
        <br>
        <label for="phone_number">Phone:</label>
        <input type="text" id="phone_number" name="phone_number">
        <br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50"></textarea>
        <br>
        <button type="submit">Create Customer</button>
    </form>
</div>