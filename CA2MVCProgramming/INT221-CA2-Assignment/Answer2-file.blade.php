<h1>Student Profile</h1>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    Name <input type="text" name="name" id="name"> <br>
    Registration Number <input type="number" name="number" id="number"> <br>
    CGPA  <input type="number" name="cgpa" id="cgpa"> <br>
    Specialization <input type="text" name="spl" id="spl"><br>
     File Upload(Resume)<input type="file" name="file"> <br><br>
    <button type="submit">Sumbit</button>
</form>
