<form method="POST" >
    @csrf
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom"><br><br>
    
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br><br>
    
    <label for="produit">Produit</label><br>
    <select name="produit" id="produit">
        <option value="produit1">Produit 1</option>
        <option value="produit2">Produit 2</option>
        <option value="produit3">Produit 3</option>
    </select><br><br>
    
    <button type="submit" style="background:black;color:white" href="{{ route('add.to.cart', $product->id) }}">Commander</button>
</form>