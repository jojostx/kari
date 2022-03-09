<?php

namespace App\Http\Livewire\Admin\App;

use App\Models\User;
use Livewire\Component;
use Spatie\Searchable\Search;
use Spatie\Searchable\SearchResultCollection;

class SearchHeader extends Component
{
    public $searchQuery;

    public function search(String $search): SearchResultCollection
    {
        return (new Search())
            ->registerModel(User::class,  ['first_name', 'last_name', 'email'])
            ->search($search);
    }

    public function updatedSearchQuery($value)
    {
        $is_not_valid = (ctype_space($value)) || (empty($value));

        if ($is_not_valid) {
            $this->searchResults = searchResultCollection::make([]);

            return;
        }

        $this->searchResults = $this->search($value);
        $this->dispatchBrowserEvent('open-global-search-results');
    }

    public function getSearchResultsProperty()
    {
        return SearchResultCollection::make([]);
    }

    public function render()
    {
        return view('livewire.admin.app.search-header');
    }
}
