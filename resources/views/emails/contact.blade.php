@component('mail::message')
# New Contact Message

**Name:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
**Service:** {{ $contact->service }}  

### Message:
{{ $contact->message }}

@endcomponent
