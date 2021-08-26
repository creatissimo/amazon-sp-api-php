<?php
/**
 * OfferDetail.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;


/**
 * OfferDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OfferDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'my_offer'                 => 'bool',
        'offer_type'               => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferCustomerType',
        'sub_condition'            => 'string',
        'seller_id'                => 'string',
        'condition_notes'          => 'string',
        'seller_feedback_rating'   => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType',
        'shipping_time'            => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType',
        'listing_price'            => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
        'quantity_discount_prices' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\QuantityDiscountPriceType[]',
        'points'                   => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',
        'shipping'                 => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
        'ships_from'               => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType',
        'is_fulfilled_by_amazon'   => 'bool',
        'prime_information'        => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PrimeInformationType',
        'is_buy_box_winner'        => 'bool',
        'is_featured_merchant'     => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'my_offer'                 => null,
        'offer_type'               => null,
        'sub_condition'            => null,
        'seller_id'                => null,
        'condition_notes'          => null,
        'seller_feedback_rating'   => null,
        'shipping_time'            => null,
        'listing_price'            => null,
        'quantity_discount_prices' => null,
        'points'                   => null,
        'shipping'                 => null,
        'ships_from'               => null,
        'is_fulfilled_by_amazon'   => null,
        'prime_information'        => null,
        'is_buy_box_winner'        => null,
        'is_featured_merchant'     => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_id'                => 'sellerId',
        'my_offer'                 => 'MyOffer',
        'offer_type'               => 'offerType',
        'sub_condition'            => 'SubCondition',
        'condition_notes'          => 'ConditionNotes',
        'seller_feedback_rating'   => 'SellerFeedbackRating',
        'shipping_time'            => 'ShippingTime',
        'listing_price'            => 'ListingPrice',
        'quantity_discount_prices' => 'quantityDiscountPrices',
        'points'                   => 'Points',
        'shipping'                 => 'Shipping',
        'ships_from'               => 'ShipsFrom',
        'is_fulfilled_by_amazon'   => 'IsFulfilledByAmazon',
        'prime_information'        => 'PrimeInformation',
        'is_buy_box_winner'        => 'IsBuyBoxWinner',
        'is_featured_merchant'     => 'IsFeaturedMerchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_id'                => 'setSellerId',
        'my_offer'                 => 'setMyOffer',
        'offer_type'               => 'setOfferType',
        'sub_condition'            => 'setSubCondition',
        'condition_notes'          => 'setConditionNotes',
        'seller_feedback_rating'   => 'setSellerFeedbackRating',
        'shipping_time'            => 'setShippingTime',
        'listing_price'            => 'setListingPrice',
        'quantity_discount_prices' => 'setQuantityDiscountPrices',
        'points'                   => 'setPoints',
        'shipping'                 => 'setShipping',
        'ships_from'               => 'setShipsFrom',
        'is_fulfilled_by_amazon'   => 'setIsFulfilledByAmazon',
        'prime_information'        => 'setPrimeInformation',
        'is_buy_box_winner'        => 'setIsBuyBoxWinner',
        'is_featured_merchant'     => 'setIsFeaturedMerchant'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_id'                => 'getSellerId',
        'my_offer'                 => 'getMyOffer',
        'offer_type'               => 'getOfferType',
        'sub_condition'            => 'getSubCondition',
        'condition_notes'          => 'getConditionNotes',
        'seller_feedback_rating'   => 'getSellerFeedbackRating',
        'shipping_time'            => 'getShippingTime',
        'listing_price'            => 'getListingPrice',
        'quantity_discount_prices' => 'getQuantityDiscountPrices',
        'points'                   => 'getPoints',
        'shipping'                 => 'getShipping',
        'ships_from'               => 'getShipsFrom',
        'is_fulfilled_by_amazon'   => 'getIsFulfilledByAmazon',
        'prime_information'        => 'getPrimeInformation',
        'is_buy_box_winner'        => 'getIsBuyBoxWinner',
        'is_featured_merchant'     => 'getIsFeaturedMerchant'];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['seller_id']                = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['my_offer']                 = isset($data['my_offer']) ? $data['my_offer'] : null;
        $this->container['offer_type']               = isset($data['offer_type']) ? $data['offer_type'] : null;
        $this->container['sub_condition']            = isset($data['sub_condition']) ? $data['sub_condition'] : null;
        $this->container['condition_notes']          = isset($data['condition_notes']) ? $data['condition_notes'] : null;
        $this->container['seller_feedback_rating']   = isset($data['seller_feedback_rating']) ? $data['seller_feedback_rating'] : null;
        $this->container['shipping_time']            = isset($data['shipping_time']) ? $data['shipping_time'] : null;
        $this->container['listing_price']            = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['quantity_discount_prices'] = isset($data['quantity_discount_prices']) ? $data['quantity_discount_prices'] : null;
        $this->container['points']                   = isset($data['points']) ? $data['points'] : null;
        $this->container['shipping']                 = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['ships_from']               = isset($data['ships_from']) ? $data['ships_from'] : null;
        $this->container['is_fulfilled_by_amazon']   = isset($data['is_fulfilled_by_amazon']) ? $data['is_fulfilled_by_amazon'] : null;
        $this->container['prime_information']        = isset($data['prime_information']) ? $data['prime_information'] : null;
        $this->container['is_buy_box_winner']        = isset($data['is_buy_box_winner']) ? $data['is_buy_box_winner'] : null;
        $this->container['is_featured_merchant']     = isset($data['is_featured_merchant']) ? $data['is_featured_merchant'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sub_condition'] === null) {
            $invalidProperties[] = "'sub_condition' can't be null";
        }
        if ($this->container['shipping_time'] === null) {
            $invalidProperties[] = "'shipping_time' can't be null";
        }
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['is_fulfilled_by_amazon'] === null) {
            $invalidProperties[] = "'is_fulfilled_by_amazon' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets my_offer
     *
     * @return bool
     */
    public function getMyOffer()
    {
        return $this->container['my_offer'];
    }

    /**
     * Sets my_offer
     *
     * @param bool $my_offer When true, this is the seller's offer.
     *
     * @return $this
     */
    public function setMyOffer($my_offer)
    {
        $this->container['my_offer'] = $my_offer;

        return $this;
    }

    /**
     * Gets offer_type
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferCustomerType
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferCustomerType $offer_type offer_type
     *
     * @return $this
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets sub_condition
     *
     * @return string
     */
    public function getSubCondition()
    {
        return $this->container['sub_condition'];
    }

    /**
     * Sets sub_condition
     *
     * @param string $sub_condition The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM,
     *                              Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return $this
     */
    public function setSubCondition($sub_condition)
    {
        $this->container['sub_condition'] = $sub_condition;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id The seller identifier for the offer.
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets condition_notes
     *
     * @return string
     */
    public function getConditionNotes()
    {
        return $this->container['condition_notes'];
    }

    /**
     * Sets condition_notes
     *
     * @param string $condition_notes Information about the condition of the item.
     *
     * @return $this
     */
    public function setConditionNotes($condition_notes)
    {
        $this->container['condition_notes'] = $condition_notes;

        return $this;
    }

    /**
     * Gets seller_feedback_rating
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType
     */
    public function getSellerFeedbackRating()
    {
        return $this->container['seller_feedback_rating'];
    }

    /**
     * Sets seller_feedback_rating
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerFeedbackType $seller_feedback_rating seller_feedback_rating
     *
     * @return $this
     */
    public function setSellerFeedbackRating($seller_feedback_rating)
    {
        $this->container['seller_feedback_rating'] = $seller_feedback_rating;

        return $this;
    }

    /**
     * Gets shipping_time
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\DetailedShippingTimeType $shipping_time shipping_time
     *
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->container['shipping_time'] = $shipping_time;

        return $this;
    }

    /**
     * Gets listing_price
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $listing_price listing_price
     *
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets quantity_discount_prices
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\QuantityDiscountPriceType[]
     */
    public function getQuantityDiscountPrices()
    {
        return $this->container['quantity_discount_prices'];
    }

    /**
     * Sets quantity_discount_prices
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\QuantityDiscountPriceType[] $quantity_discount_prices quantity_discount_prices
     *
     * @return $this
     */
    public function setQuantityDiscountPrices($quantity_discount_prices)
    {
        $this->container['quantity_discount_prices'] = $quantity_discount_prices;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets ships_from
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType
     */
    public function getShipsFrom()
    {
        return $this->container['ships_from'];
    }

    /**
     * Sets ships_from
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ShipsFromType $ships_from ships_from
     *
     * @return $this
     */
    public function setShipsFrom($ships_from)
    {
        $this->container['ships_from'] = $ships_from;

        return $this;
    }

    /**
     * Gets is_fulfilled_by_amazon
     *
     * @return bool
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->container['is_fulfilled_by_amazon'];
    }

    /**
     * Sets is_fulfilled_by_amazon
     *
     * @param bool $is_fulfilled_by_amazon When true, the offer is fulfilled by Amazon.
     *
     * @return $this
     */
    public function setIsFulfilledByAmazon($is_fulfilled_by_amazon)
    {
        $this->container['is_fulfilled_by_amazon'] = $is_fulfilled_by_amazon;

        return $this;
    }

    /**
     * Gets prime_information
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PrimeInformationType
     */
    public function getPrimeInformation()
    {
        return $this->container['prime_information'];
    }

    /**
     * Sets prime_information
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\PrimeInformationType $prime_information prime_information
     *
     * @return $this
     */
    public function setPrimeInformation($prime_information)
    {
        $this->container['prime_information'] = $prime_information;

        return $this;
    }

    /**
     * Gets is_buy_box_winner
     *
     * @return bool
     */
    public function getIsBuyBoxWinner()
    {
        return $this->container['is_buy_box_winner'];
    }

    /**
     * Sets is_buy_box_winner
     *
     * @param bool $is_buy_box_winner When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN,
     *                                one that is eligible for Prime and one that is not eligible for Prime.
     *
     * @return $this
     */
    public function setIsBuyBoxWinner($is_buy_box_winner)
    {
        $this->container['is_buy_box_winner'] = $is_buy_box_winner;

        return $this;
    }

    /**
     * Gets is_featured_merchant
     *
     * @return bool
     */
    public function getIsFeaturedMerchant()
    {
        return $this->container['is_featured_merchant'];
    }

    /**
     * Sets is_featured_merchant
     *
     * @param bool $is_featured_merchant When true, the seller of the item is eligible to win the Buy Box.
     *
     * @return $this
     */
    public function setIsFeaturedMerchant($is_featured_merchant)
    {
        $this->container['is_featured_merchant'] = $is_featured_merchant;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[ $offset ]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[ $offset ]) ? $this->container[ $offset ] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[ $offset ] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[ $offset ]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
