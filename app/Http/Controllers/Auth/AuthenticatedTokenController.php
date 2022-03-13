<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthenticatedTokenController extends Controller
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $accessToken = $user->createToken($request->device_name)->plainTextToken;
        $user->withAccessToken($accessToken);

        return response()->json(UserResource::make($user));
    }

    public function verifyToken(Request $request)
    {
        $user = $request->user();
        $user->withAccessToken($request->bearerToken());
        return response(UserResource::make($user));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->user->tokens()->delete();

        return response()->noContent();
    }
}
