
                            <table>
                              <thead> 
                                <tr>                                    
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Nombre</th>
                                  <th style="color:#fff;">E-mail</th>   
                                </tr>                                                              
                              </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>