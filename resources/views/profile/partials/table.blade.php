   <table class="table" style="width: 100%">
            <thead style="background-color: rgb(179, 236, 164) ;">
              <tr>
                <th scope="col">Program Name</th>
                <th scope="col">Location</th>
                <th scope="col">Experiance</th>
                <th scope="col">CV file</th>
                <th scope="col">Donate</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($volunteers as $item)
    
<tr>
       <td scope="col">{{ $vo->Languages }}</td>
                <td scope="col">{{ $item->Address }}</td>
                <td scope="col">{{ $item->Experience }}</td>
                {{-- <td scope="col">{{ $item->CV }}</td> --}}
                <td></td>
                <td scope="col">{{ $item->day }}</td>
            
@endforeach
           
            <tr>

            </tr>
            
             {{-- @foreach ($volunteers as $program)
                <tr>
                    <td>{{ $program->Languages }}</td>
                    <td>{{ $program->Address }}</td>
                    <td>{{ $program->Experiance }}</td>
                    <td>{{ $program->CV }}</td>
            
                </tr>
            @endforeach 
          --}}
            </tbody>
          </table>