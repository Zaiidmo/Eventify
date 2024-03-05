<Form action="api/event" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Event Title"><br>
    <input type="text" name="description" placeholder="Event Title"><br>
    <input type="text" name="date" placeholder="Event Title"><br>
    <input type="text" name="location" placeholder="Event Title"><br>
    <input type="number" name="available_tickets" placeholder="Event Title"><br>
    <input type="number" name="ticket_price" placeholder="Event Title"><br>
    <input type="text" name="mode" placeholder="Event Title"><br>
    <input type="text" name="category_id" placeholder="Event Title"><br>
    <button type="submit">
        Create
    </button>
</Form>