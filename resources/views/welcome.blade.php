<form method="post" action="/">
  @csrf
  <input type="number" id="value" name="value" min="2" required>
  <button type="submit" name="submit">Submit</button>
</form>

Note: a^2 + b^2 = c^ Value: {{$id}}
<table border="1">
  <tr>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>AVG</th>
  </tr>
  <tr>
    @foreach($json as $j)
      <td>{{$j}}</td>
    @endforeach
  </tr>
</table>
