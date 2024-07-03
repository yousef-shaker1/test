<?php

namespace App\Http\Middleware;

use Closure;
// use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class JwtMiddlewire
{ 
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['status' => 'Token is Invalid']);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['status' => 'Token is Expired']);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            // هذه الحالة تُلتقط إذا لم يتم العثور على التوكن
            return response()->json(['status' => 'Authorization Token not found']);
        } catch (Exception $e) {
            // أي استثناءات أخرى
            return response()->json(['status' => 'An error occurred']);
        }
        return $next($request);
    }
}
