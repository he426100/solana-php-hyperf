<?php

namespace He426100\SolanaPhpSdk;

use He426100\SolanaPhpSdk\Util\AccountMeta;
use He426100\SolanaPhpSdk\Util\Buffer;

class TransactionInstruction
{
    /**
     * @var array<AccountMeta>
     */
    public array $keys;
    public PublicKey $programId;
    public Buffer $data;

    public function __construct(PublicKey $programId, array $keys, $data = null)
    {
        $this->programId = $programId;
        $this->keys = $keys;
        $this->data = Buffer::from($data);
    }
}
