<x-layout>
   <x-slot:heading>
      Expenses
   </x-slot:heading>
   <p>View your  entered expenses for the specified timeframe. <br> </p>
   <ul class="list-disc pl-5">
      @foreach($expenses as $expense)
         <li><a href="/expense/{{ $expense->id }}" class="text-blue-500 hover:underline">
            <strong>{{ $expense->name }}: </strong> ${{ number_format($expense->amount, 2) }}
         </a></li>
      @endforeach
   </ul>
</x-layout>   
