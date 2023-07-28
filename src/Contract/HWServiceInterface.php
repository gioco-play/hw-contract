<?php
declare(strict_types=1);
namespace GiocoPlus\HW\Contract;
/**
 *
 */
interface HWServiceInterface {

    /**
     * 遊戲啟動
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $backUrl
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $backUrl = '');

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $language = 'en');
}

