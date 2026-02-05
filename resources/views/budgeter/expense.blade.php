<x-layout>
   <x-slot:heading>
      View Expense
   </x-slot:heading>
   <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $expense['title']; }}</h1>
   
   <ul>
   @foreach($expense->getFillableAttributes() as $detail => $value)
      @if($detail !== 'title' && $detail !== 'id')
         <li>
            <strong>{{ ucfirst($detail) }}: </strong> {{ (gettype($value) === 'integer' || gettype($value) === 'double') 
               ? '$' . number_format($value, 2) 
               : ($value ?: 'None') 
            }}
         </li>
      @endif
   @endforeach
   </ul>

</x-layout>   
