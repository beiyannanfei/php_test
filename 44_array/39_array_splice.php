<?php

namespace App\Http\Controllers\Friend;

use App\Http\Logic\Role\User;
use App\Http\Persistence\Model\FriendModel\UserFriendInteractModel;
use App\Http\Persistence\Model\FriendModel\UserFriendModel;
use App\Http\Persistence\Model\UserModel\UserModel;
use App\Http\Util\Http\Pull3rdPartyInfo;
use App\Http\Util\Tools;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Util\GameRequest;
use DB;
use Mockery\Exception;
use Protobuf\Friend\Friend;
use Protobuf\Friend\FriendType;
use Protobuf\Friend\GetGameFriendsList;
use Log as logger;
use Protobuf\Friend\VoucherSendType;

class GetGameFriendsListController extends Controller
{
    public function request(Request $request)
    {
        /*$finfo = UserFriendModel::getFriendInfo(1, 20);
        logger::info("======== exists =======" . json_encode(isset($finfo)));
        logger::info("======== type =======" . gettype($finfo));
        logger::info("======== value ========" . json_encode($finfo));*/


        $t1 = new Friend();
        $t1->setId(2);
        $t1->setReadCount(10);
        $t1->setReceiveVoucherFlag(0);
        $t1->setSendVoucherFlag(0);
        $t1->setName("aaa");
        $t1->setHeadIcon("aaa");
        $t1->setHeadIconFrame("aaaa");

        $t2 = new Friend();
        $t2->setId(1);
        $t2->setReadCount(5);
        $t2->setReceiveVoucherFlag(0);
        $t2->setSendVoucherFlag(0);
        $t2->setName("bbb");
        $t2->setHeadIcon("bbb");
        $t2->setHeadIconFrame("bbb");

        $t3 = new Friend();
        $t3->setId(3);
        $t3->setReadCount(7);
        $t3->setReceiveVoucherFlag(0);
        $t3->setSendVoucherFlag(0);
        $t3->setName("ccc");
        $t3->setHeadIcon("ccc");
        $t3->setHeadIconFrame("ccc");

        $t4 = new Friend();
        $t4->setId(4);
        $t4->setReadCount(10);
        $t4->setReceiveVoucherFlag(0);
        $t4->setSendVoucherFlag(0);
        $t4->setName("ddd");
        $t4->setHeadIcon("ddd");
        $t4->setHeadIconFrame("ddd");

        $resultArr = array();
        array_push($resultArr, $t1);
        array_push($resultArr, $t2);
        array_push($resultArr, $t3);
        array_push($resultArr, $t4);

        /**
         * @var $value Friend
         */
        /*        foreach ($resultArr as $key => $value) {
        //            $readCount[$key] = $value['readCount'];
        //            $userId[$key] = $value['id'];
                    $readCount[$key] = $value->getReadCount();
                    $userId[$key] = $value->getId();
                }
                array_multisort($readCount, SORT_NUMERIC, SORT_DESC, $userId, SORT_NUMERIC, SORT_ASC, $resultArr);*/

        foreach ($resultArr as $key => $value) {
            logger::info("id: " . $value->getId() . " name: " . $value->getName() . " readcount: " . $value->getReadCount());
        }
        logger::info("========================= after =========================");


        $resultArr = array_filter($resultArr, function ($item) {
            /**
             * @var $item Friend
             */
            return 3 != $item->getId();
        });

        foreach ($resultArr as $key => $value) {
            logger::info("id: " . $value->getId() . " name: " . $value->getName() . " readcount: " . $value->getReadCount());
        }

        /*$result = Pull3rdPartyInfo::pullFriendList(1);
        logger::info('=======$result=======' . json_encode($result));
        logger::info('=======type $result=======' . gettype($result));
        logger::info('=======$result.user3rdFriendList=======' . json_encode($result->user3rdFriendList));
        logger::info('=======$result.user3rdFriendList type=======' . gettype($result->user3rdFriendList));
        logger::info('=======$result.user3rdFriendList count=======' . count($result->user3rdFriendList));
        foreach ($result->user3rdFriendList as $item) {
            logger::info('=========$item======= ' . json_encode($item));
            logger::info('=========type $item======= ' . gettype($item));
            logger::info($item->nickName);
        }

        $fIdList = array_column($result->user3rdFriendList, "globalId");
        logger::info('=========$fIdList======= ' . json_encode($fIdList));
        logger::info('=========type $fIdList======= ' . gettype($fIdList));*/

        /*$list = UserFriendModel::getFriendList(1);
        logger::info("===a==" . json_encode($list));
        logger::info("===type====" . gettype($list));
        foreach ($list as $l) {
            logger::info("====type===" . gettype($l['sendTime']));
            logger::info("====value===" . $l['sendTime']);
            logger::info("====isset===" . json_encode(isset($l['sendTime'])));
        }*/


        /*foreach ($list as $l) {
            logger::info("====sub doc===" . gettype($l));
            logger::info($l->friendId . " " . $l->sendStatus);
            logger::info($l["uid"]);
        }
        logger::info("-----------------------------");
        $result = Tools::arr2Obj($list, "friendId");
        logger::info("=============" . json_encode($result));
        logger::info("=============" . gettype($result));
        logger::info("=============" . gettype($result["2"]));
        logger::info("=============" . json_encode($result["2"]));
        logger::info("=============" . json_encode($result["2"]["createTime"]));
        logger::info("--------------" . json_encode(isset($result["20"])));*/


        /*$listArr = $list->toArray();
        logger::info("===type====" . gettype($listArr));
        foreach ($listArr as $l) {
            logger::info("====sub doc===" . gettype($l));
        }
        logger::info("-----------------------------");


        $fIdList = array_column($list->toArray(), "friendId");
        logger::info('==== $fIdList ====' . json_encode($fIdList));
        logger::info('==== $fIdList ====' . $fIdList[0]);

        $listaaa = UserFriendModel::whereIn("friendId", $fIdList)->select("uid", "friendId")->get();
        logger::info("*********" . json_encode($listaaa));
        logger::info("============" . count($listaaa));
        logger::info("============" . gettype($listaaa));
        logger::info("============" . gettype($listaaa->toArray()));*/

        logger::info("**********************************************");
        $friendNumber = UserFriendModel::getUserActiveFriendNumber(1);
        logger::info("===============type===============" . gettype($friendNumber));
        logger::info("===============value===============" . $friendNumber);

        logger::info("**********************************************");
        $res1 = UserFriendModel::where(UserFriendModel::m_uid, 1)->where(UserFriendModel::m_friendId, 2)->first();
        logger::info("======================res1: " . json_encode($res1));
        logger::info("======================type: " . gettype($res1));
        logger::info("======================value: " . $res1->type . " " . $res1['createTime']);
        logger::info("**********************************************");


        $relationExists = UserFriendModel::where(UserFriendModel::m_uid, 2)->where(UserFriendModel::m_friendId, 1)->first();
        logger::info("============== isset: " . json_encode(isset($relationExists)) . " empty: " . json_encode(empty($relationExists)));

        logger::info("**********************************************");
        $uid = 1;
        $friendId = 7;
        $friendInfo = array();
        $friendInfo['uid'] = $uid;
        $friendInfo['friendId'] = $friendId;
        $insertResponse = 0;
        try {
            $insertResponse = UserFriendModel::insert($friendInfo);
        } catch (\PDOException $e) {
            logger::error(sprintf("UserFriendManager makeFriendRelation insert uid: %s, friendId: %s, error: %s", $uid, $friendId, $e->getMessage()));
        }
        logger::info('===============$insertResponse: ' . $insertResponse);

        logger::info("**********************************************");

        $updateResponse = UserFriendModel::where(UserFriendModel::m_uid, 1)
            ->where(UserFriendModel::m_friendId, 4)
            ->update([UserFriendModel::m_isActive => 1, UserFriendModel::m_createTime => Tools::getCurrentTime()]);
        logger::info('===================== $updateResponse: ' . $updateResponse);

        logger::info("**********************************************");

        $userBaseInfoList = UserFriendModel::getFriendBaseInfoList([1516186662302]);
        logger::info('===================$userBaseInfoList: ' . json_encode($userBaseInfoList));
        logger::info('===================$userBaseInfoList type: ' . gettype($userBaseInfoList));
        logger::info('===================$userBaseInfoList[0]: ' . json_encode($userBaseInfoList[0]));
        logger::info('===================$userBaseInfoList[0].readNumber: ' . $userBaseInfoList[0][UserModel::m_readNumber] . ' uid: ' . $userBaseInfoList[0]->uid);

        logger::info("**********************************************");
        $userBaseInfo = UserFriendModel::getFriendBaseInfoList([1516186662302])[0];
        logger::info('===================$userBaseInfo: ' . json_encode($userBaseInfo));
        logger::info('===================$userBaseInfo type: ' . gettype($userBaseInfo));
        logger::info('===================$userBaseInfo.readNumber: ' . $userBaseInfo[UserModel::m_readNumber] . ' uid: ' . $userBaseInfo->uid);

        logger::info("**********************************************");
        $userBaseInfo = UserFriendModel::getFriendBaseInfoList([1]);
        logger::info('============ $userBaseInfo has: ' . json_encode(empty($userBaseInfo)) . ' count: ' . count($userBaseInfo) . ' value: ' . json_encode($userBaseInfo));
        logger::info('================ has: ' . json_encode(empty($userBaseInfo[0])) . ' isset: ' . json_encode(isset($userBaseInfo[0])));

        logger::info("**********************************************");

    }

    public function request1(Request $request)
    {
        $res = UserFriendInteractModel::getOneFriendInteract(1, 3);
        logger::info('======== $res: ' . json_encode($res));
        logger::info('======== $res.sendTime ' . json_encode($res[UserFriendInteractModel::m_sendTime]));
        logger::info('=============today: ' . explode(' ', Tools::getCurrentTime())[0]);
        logger::info('==========isToday: ' . json_encode(explode(' ', Tools::getCurrentTime())[0] == $res[UserFriendInteractModel::m_sendTime]));
    }

    public function request2(Request $request)
    {
        $friendInfo = array();
        $friendInfo[UserFriendInteractModel::m_uid] = 1;
        $friendInfo[UserFriendInteractModel::m_friendId] = 6;
        $friendInfo[UserFriendInteractModel::m_sendStatus] = VoucherSendType::yes;
        $friendInfo[UserFriendInteractModel::m_sendTime] = date('Y-m-d');
        $insertResponse = 0;
        try {
            $insertResponse = UserFriendInteractModel::insert($friendInfo);
        } catch (\Exception $e) {
            return logger::error(sprintf("UserFriendManager makeFriendRelation insert error: %s, friendInfo: %s", $e->getMessage(), json_encode($friendInfo)));
        }
        logger::info('===============$insertResponse: ' . $insertResponse);
    }

    public function request3()
    {
        UserFriendInteractModel::where(UserFriendInteractModel::m_uid, 1)
            ->where(UserFriendInteractModel::m_friendId, 3)
            ->where(UserFriendInteractModel::m_isActive, 1)
            ->update([UserFriendInteractModel::m_sendStatus => VoucherSendType::yes, UserFriendInteractModel::m_sendTime => date('Y-m-d')]);
    }

    public function request4()
    {
        $ret = UserFriendInteractModel::updateOrCreate(
            [UserFriendInteractModel::m_uid => 1, UserFriendInteractModel::m_friendId => 8, UserFriendInteractModel::m_isActive => 1],
            [UserFriendInteractModel::m_sendStatus => 1, UserFriendInteractModel::m_sendTime => date('Y-m-d')]
        );

        /*       $ret = UserFriendInteractModel::updateOrCreate(
                   ['id' => 9],
                   ['uid' => 1, 'friendId' => 7]
               );*/

        logger::info('================ $ret: ' . json_encode($ret));
        logger::info('================ type $ret: ' . gettype($ret));
    }

    public function request5()
    {
        $ids = array(6, 7, 8);
        $ret = UserFriendInteractModel::where(function ($query) use ($ids) {
            $query->where(UserFriendInteractModel::m_friendId, $ids[0])
                ->orWhere(UserFriendInteractModel::m_friendId, $ids[1])
                ->orWhere(UserFriendInteractModel::m_friendId, $ids[2]);
        })->where(UserFriendInteractModel::m_isActive, 1)
            ->select(UserFriendInteractModel::m_uid, UserFriendInteractModel::m_friendId, UserFriendInteractModel::m_isActive)
            ->get();
        logger::info('=============== ret: ' . json_encode($ret));
    }


    public function initFriendList4game()
    {
        //todo 获取好友列表并逐个处理最后排序
        $gameFriendList4Db = UserFriendModel::getFriendList($this->uid);    //获取好友列表
        if (0 == count($gameFriendList4Db)) {   //没有好友
            return;
        }

        $friendIdList = array_column($gameFriendList4Db->toArray(), "friendId");    //获取好友id列表
        array_push($friendIdList, $this->uid);      //将自己的id放入数组同时查出相关信息
        $userBaseInfoList = UserFriendModel::getFriendBaseInfoList($friendIdList);          //获取好友基础信息
        $userBaseInfoList = Tools::arr2Obj($userBaseInfoList, UserModel::m_uid);        //获取类对象数组格式
        $userFriendInteractList = UserFriendInteractModel::getFriendInteractList($this->uid);   //获取好友交互列表
        $userFriendInteractList = Tools::arr2Obj($userFriendInteractList, UserFriendInteractModel::m_friendId); //转换为可以直接通过 friendId 获取信息的类对象数组
        $resultArr = array();   //结果数组
        foreach ($gameFriendList4Db as $friend) {   //遍历好友列表
            $friendBaseInfo = $userBaseInfoList[$friend[UserFriendModel::m_friendId]];  //获取好友基础信息
            if (!isset($friendBaseInfo)) {
                continue;
            }
            $tempArr = new Friend();
            $tempArr->setId($friend[UserFriendModel::m_friendId]);
            $tempArr->setReadCount($friendBaseInfo[UserModel::m_readNumber]);
            $tempArr->setReceiveVoucherFlag(FriendLogic::checkVoucherReceiveStatus($userFriendInteractList[$friend[UserFriendModel::m_friendId]])); //书券状态(好友赠送给我的)
            $tempArr->setSendVoucherFlag(FriendLogic::checkVoucherSendStatus($userFriendInteractList[$friend[UserFriendModel::m_friendId]])); //书券的赠送状态
            $tempArr->setName($friendBaseInfo[UserModel::m_nickname]);
            $tempArr->setHeadIcon($friendBaseInfo[UserModel::m_icon]);
            $tempArr->setHeadIconFrame($friendBaseInfo[UserModel::m_headframe]);
            array_push($resultArr, $tempArr);
        }
        $selfArr = new Friend();
        $selfArr->setId($this->uid);
        $selfArr->setReadCount(isset($userBaseInfoList[$this->uid]) ? $userBaseInfoList[$this->uid][UserModel::m_readNumber] : 0);
        $selfArr->setReceiveVoucherFlag(VoucherReceiveType::notSend);   //自己在自己的列表该字段无意义
        $selfArr->setSendVoucherFlag(VoucherSendType::no);              //自己在自己的列表该字段无意义
        $selfArr->setName(isset($userBaseInfoList[$this->uid]) ? $userBaseInfoList[$this->uid][UserModel::m_nickname] : "");
        $selfArr->setHeadIcon(isset($userBaseInfoList[$this->uid]) ? $userBaseInfoList[$this->uid][UserModel::m_icon] : "");
        $selfArr->setHeadIconFrame(isset($userBaseInfoList[$this->uid]) ? $userBaseInfoList[$this->uid][UserModel::m_headframe] : "");
        array_push($resultArr, $selfArr);       //将自己放入好友列表

        /**
         * 排序(按照阅读章节降序，id升序)
         * @var $value Friend
         */
        $readCount = $userId = array();
        foreach ($resultArr as $key => $value) {
            $readCount[$key] = $value->getReadCount();
            $userId[$key] = $value->getId();
        }
        array_multisort($readCount, SORT_NUMERIC, SORT_DESC, $userId, SORT_NUMERIC, SORT_ASC, $resultArr);
        $this->friendList4game = $resultArr;
    }

    public function initFriendList4game()
    {
        //todo 获取好友列表并逐个处理最后排序
        $gameFriendList4Db = UserFriendModel::getFriendList($this->uid);    //获取好友列表
        if (0 == count($gameFriendList4Db)) {   //没有好友
            return;
        }

        $friendIdList = array_column($gameFriendList4Db->toArray(), "friendId");    //获取好友id列表
        array_push($friendIdList, $this->uid);      //将自己的id放入数组同时查出相关信息
        $userBaseInfoList = FriendLogic::getUserDetailInfo($friendIdList);  //获取好友基础信息[uid=>{m_uid m_nickname m_icon m_headframe m_readNumber readNum}]
        $userFriendInteractList = UserFriendInteractModel::getFriendInteractList($this->uid);   //获取好友交互列表
        $userFriendInteractList = Tools::arr2Obj($userFriendInteractList, UserFriendInteractModel::m_friendId); //转换为可以直接通过 friendId 获取信息的类对象数组
        $resultArr = array();   //结果数组
        foreach ($gameFriendList4Db as $friend) {   //遍历好友列表
            $friendBaseInfo = $userBaseInfoList[$friend[UserFriendModel::m_friendId]];  //获取好友基础信息
            if (empty($friendBaseInfo)) {
                continue;
            }
            $friendBaseInfo = (array)$friendBaseInfo;
            $tempArr = new Friend();
            $tempArr->setId($friend[UserFriendModel::m_friendId]);
            $tempArr->setReadCount($friendBaseInfo['readNum']);
            $tempArr->setReceiveVoucherFlag(FriendLogic::checkVoucherReceiveStatus($userFriendInteractList[$friend[UserFriendModel::m_friendId]])); //书券状态(好友赠送给我的)
            $tempArr->setSendVoucherFlag(FriendLogic::checkVoucherSendStatus($userFriendInteractList[$friend[UserFriendModel::m_friendId]])); //书券的赠送状态
            $tempArr->setName($friendBaseInfo[UserModel::m_nickname]);
            $tempArr->setHeadIcon($friendBaseInfo[UserModel::m_icon]);
            $tempArr->setHeadIconFrame($friendBaseInfo[UserModel::m_headframe]);
            array_push($resultArr, $tempArr);
        }
        $selfArr = new Friend();
        $selfArr->setId($this->uid);
        $selfArr->setReadCount(isset($userBaseInfoList[$this->uid]) ? ((array)$userBaseInfoList[$this->uid])[UserModel::m_readNumber] : 0);
        $selfArr->setReceiveVoucherFlag(VoucherReceiveType::notSend);   //自己在自己的列表该字段无意义
        $selfArr->setSendVoucherFlag(VoucherSendType::no);              //自己在自己的列表该字段无意义
        $selfArr->setName(isset($userBaseInfoList[$this->uid]) ? ((array)$userBaseInfoList[$this->uid])[UserModel::m_nickname] : "");
        $selfArr->setHeadIcon(isset($userBaseInfoList[$this->uid]) ? ((array)$userBaseInfoList[$this->uid])[UserModel::m_icon] : "");
        $selfArr->setHeadIconFrame(isset($userBaseInfoList[$this->uid]) ? ((array)$userBaseInfoList[$this->uid])[UserModel::m_headframe] : "");
        array_push($resultArr, $selfArr);       //将自己放入好友列表

        /**
         * 排序(按照阅读章节降序，id升序)
         * @var $value Friend
         */
        $readCount = $userId = array();
        foreach ($resultArr as $key => $value) {
            $readCount[$key] = $value->getReadCount();
            $userId[$key] = $value->getId();
        }
        array_multisort($readCount, SORT_NUMERIC, SORT_DESC, $userId, SORT_NUMERIC, SORT_ASC, $resultArr);
        $this->friendList4game = $resultArr;
    }
}
