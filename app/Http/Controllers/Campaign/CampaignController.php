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



    }

    public function read($id) {

        $campaign = Campaign::findOrFail($id);
        return view('campaign.read')->with('campaign', $campaign);

    }

    public function update(Request $request) {



    }

    public function delete(Request $request) {



    }

    public function form(Request $request) {



    }
}