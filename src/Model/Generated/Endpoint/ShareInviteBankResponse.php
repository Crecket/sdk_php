<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\ShareDetail;

/**
 * Used to view or respond to shares a user was invited to. See
 * 'share-invite-bank-inquiry' for more information about the inquiring
 * endpoint.
 *
 * @generated
 */
class ShareInviteBankResponse extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/share-invite-bank-response/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/share-invite-bank-response/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/share-invite-bank-response';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ShareInviteBankResponse';

    /**
     * The monetary account and user who created the share.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterAlias;

    /**
     * The user who cancelled the share if it has been revoked or rejected.
     *
     * @var LabelUser
     */
    protected $userAliasCancelled;

    /**
     * The id of the monetary account the ACCEPTED share applies to. null
     * otherwise.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The id of the draft share invite bank.
     *
     * @var int
     */
    protected $draftShareInviteBankId;

    /**
     * The share details.
     *
     * @var ShareDetail
     */
    protected $shareDetail;

    /**
     * The status of the share. Can be ACCEPTED (other user scans the QR and
     * accepts the share), REVOKED (other user scans the QR but denies the
     * share), CANCELLED (other user cancels an existing share), EXPIRED (other
     * user did not react before expiration), PENDING (share is waiting for
     * reply by the other user) or REJECTED (share initiated by other user but
     * rejected). Once the share's status becomes REVOKED, CANCELLED, EXPIRED or
     * REJECTED, its status can no longer be updated.
     *
     * @var string
     */
    protected $status;

    /**
     * The start date of this share.
     *
     * @var string
     */
    protected $startDate;

    /**
     * The expiration date of this share.
     *
     * @var string
     */
    protected $endDate;

    /**
     * The description of this share. It is basically the monetary account
     * description.
     *
     * @var string
     */
    protected $description;

    /**
     * Return the details of a specific share a user was invited to.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $shareInviteBankResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankResponse
     */
    public static function get(ApiContext $apiContext, int $userId, int $shareInviteBankResponseId, array $customHeaders = []): BunqResponseShareInviteBankResponse
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $shareInviteBankResponseId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseShareInviteBankResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Accept or reject a share a user was invited to.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $shareInviteBankResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankResponse
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $shareInviteBankResponseId, array $customHeaders = []): BunqResponseShareInviteBankResponse
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $shareInviteBankResponseId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseShareInviteBankResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Return all the shares a user was invited to.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankResponseList
     */
    public static function listing(ApiContext $apiContext, int $userId, array $params = [], array $customHeaders = []): BunqResponseShareInviteBankResponseList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseShareInviteBankResponseList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The monetary account and user who created the share.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterAlias()
    {
        return $this->counterAlias;
    }

    /**
     * @param LabelMonetaryAccount $counterAlias
     */
    public function setCounterAlias($counterAlias)
    {
        $this->counterAlias = $counterAlias;
    }

    /**
     * The user who cancelled the share if it has been revoked or rejected.
     *
     * @return LabelUser
     */
    public function getUserAliasCancelled()
    {
        return $this->userAliasCancelled;
    }

    /**
     * @param LabelUser $userAliasCancelled
     */
    public function setUserAliasCancelled($userAliasCancelled)
    {
        $this->userAliasCancelled = $userAliasCancelled;
    }

    /**
     * The id of the monetary account the ACCEPTED share applies to. null
     * otherwise.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The id of the draft share invite bank.
     *
     * @return int
     */
    public function getDraftShareInviteBankId()
    {
        return $this->draftShareInviteBankId;
    }

    /**
     * @param int $draftShareInviteBankId
     */
    public function setDraftShareInviteBankId($draftShareInviteBankId)
    {
        $this->draftShareInviteBankId = $draftShareInviteBankId;
    }

    /**
     * The share details.
     *
     * @return ShareDetail
     */
    public function getShareDetail()
    {
        return $this->shareDetail;
    }

    /**
     * @param ShareDetail $shareDetail
     */
    public function setShareDetail($shareDetail)
    {
        $this->shareDetail = $shareDetail;
    }

    /**
     * The status of the share. Can be ACCEPTED (other user scans the QR and
     * accepts the share), REVOKED (other user scans the QR but denies the
     * share), CANCELLED (other user cancels an existing share), EXPIRED (other
     * user did not react before expiration), PENDING (share is waiting for
     * reply by the other user) or REJECTED (share initiated by other user but
     * rejected). Once the share's status becomes REVOKED, CANCELLED, EXPIRED or
     * REJECTED, its status can no longer be updated.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The start date of this share.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * The expiration date of this share.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * The description of this share. It is basically the monetary account
     * description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
