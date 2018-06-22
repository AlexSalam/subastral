<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21/06/18
 * Time: 11:50
 */

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function create(Request $request) {

        $data = $request->validate([
            'name' => 'required|max:255',
            'beginning' => 'date',
            'description' => '',
            'min-level' => 'integer',
            'max-level' => 'integer',
            'author' => 'alpha_num|max:255'
        ]);

        $campaign = new Campaign();

        $campaign->name = $data['name'];
        $campaign->beginning = $data['beginning'];
        $campaign->description = $data['description'];
        $campaign->min_level = $data['min-level'];
        $campaign->max_level = $data['max-level'];
        $campaign->author = $data['author'];

        $campaign->save();

        return view('campaign.read')->with('campaign', $campaign);

    }

    public function read($id) {

        $campaign = Campaign::findOrFail($id);
        return view('campaign.read')->with('campaign', $campaign);

    }

    public function update($id) {

        $campaign = Campaign::findOrFail($id);
        return view('campaign.form')->with('campaign', $campaign);

    }

    public function delete(Request $request, $id) {

        $campaign = Campaign::findOrFail($id);
        $campaign->delete();
        $request->session()->flash('msg', [
            'msg' => 'Campaign successfully deleted!',
            'class' => 'success'
        ]);
        return view('home');

    }

    public function form($id = null) {

        if (is_null($id)) {
            return view('campaign.form');
        }
        $campaign = Campaign::findOrFail($id);
        return view('campaign.form')->with('campaign', $campaign);

    }

    public function campaigns(Request $request) {

        $campaigns = $request->user()->campaigns;
        return view('campaign.list')->with('campaigns', $campaigns);

    }
}