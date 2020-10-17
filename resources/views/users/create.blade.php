@extends('layouts.admin-template')
<form action="/onay" method="post">
    <div class="form-group">
        <label for="examplebaslangic">Baslangıç</label>
        <input type="text" name="baslangic" class="form-control" id="examplebaslangic">
    </div>
    <div class="form-group">
        <label for="exampleanayemek">Ana Yemek</label>
        <input type="text" name="anayemek" class="form-control" id="exampleanayemek">
    </div>
    <div class="form-group">
        <label for="exampletatli">Tatlı</label>
        <input type="text" name="tatli" class="form-control" id="exampletatli">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Onaylıyorum!</button>


</form>
