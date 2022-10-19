<?php

require_once 'src/autoload.php';

use Mess\Http\Header;
use Mess\Http\Requests\NotificationRequest;
use Mess\Http\Requests\UserIdRequest;
use Mess\Persistence\ConnectionString;
use Mess\Persistence\CredentialsFile;
use Mess\Persistence\Database\Friend\FriendRequestRepository;
use Mess\Persistence\Database\User\InvitationRepository;
use Mess\Persistence\Session\Session;
use Mess\View\View;
use Mess\View\Views\NotificationView;

$session = new Session();

if ($session->userLoggedIn()) {
    $string = new ConnectionString(new CredentialsFile("connection.txt"));

    function getView(NotificationRequest $request, UserIdRequest $id, FriendRequestRepository $requestRepo, InvitationRepository $invitation, Session $session): View
    {
        $userId = $session->userId();

        if ($request->wantsPositive()) {
            $requestRepo->responsePositive($userId, $request->positive());
        }

        if ($request->wantsNegative()) {
            $requestRepo->responseNegative($userId, $request->negative());
        }
        return new NotificationView($userId, $invitation->getInvitations($id->getUserId()));
    }

    $view = getView(new NotificationRequest($_POST), new UserIdRequest($_GET), new FriendRequestRepository($string->getPdo()), new InvitationRepository($string->getPdo()), $session);
    $view->render();
} else {
    $header = Header::homepage();
    $header->send();
}
