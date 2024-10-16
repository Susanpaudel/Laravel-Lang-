<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="font-weight: 800">
    {{__('messages.money')}}{{ number_format(
        session()->get('locale') == 'en' 
            ? 400 * 0.0074 
            : (session()->get('locale') == 'ch' 
                ? 400 * 18.89 
                : 400), 
        2
    ) }}

 </div>