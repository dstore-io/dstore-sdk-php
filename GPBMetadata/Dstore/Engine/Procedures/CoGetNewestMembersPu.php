<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetNewestMembers_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class CoGetNewestMembersPu
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af6110a356473746f72652f656e67696e652f70726f636564757265732f" .
            "636f5f4765744e65776573744d656d626572735f50752e70726f746f1224" .
            "6473746f72652e656e67696e652e636f5f4765744e65776573744d656d62" .
            "6572735f50751a136473746f72652f76616c7565732e70726f746f1a1a64" .
            "73746f72652f656e67696e652f656e67696e652e70726f746f22b3090a0a" .
            "506172616d6574657273122d0a09756e697175655f696418012001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c756512170a" .
            "0e756e697175655f69645f6e756c6c18e9072001280812400a1c70657273" .
            "6f6e5f6964656e74696669636174696f6e5f76616c75657318022001280b" .
            "321a2e6473746f72652e76616c7565732e537472696e6756616c7565122a" .
            "0a21706572736f6e5f6964656e74696669636174696f6e5f76616c756573" .
            "5f6e756c6c18ea072001280812310a0c636f6d6d756e6974795f69641803" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c7565121a0a11636f6d6d756e6974795f69645f6e756c6c18eb07200128" .
            "08122f0a0a726f775f6e756d62657218042001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c756512180a0f726f775f6e75" .
            "6d6265725f6e756c6c18ec072001280812350a10646174655f74696d655f" .
            "666f726d617418052001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c7565121e0a15646174655f74696d655f666f726d61" .
            "745f6e756c6c18ed0720012808123e0a196f75747075745f636861726163" .
            "74657269737469635f69643118062001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512270a1e6f75747075745f6368" .
            "6172616374657269737469635f6964315f6e756c6c18ee0720012808123e" .
            "0a196f75747075745f63686172616374657269737469635f696432180720" .
            "01280b321b2e6473746f72652e76616c7565732e496e746567657256616c" .
            "756512270a1e6f75747075745f63686172616374657269737469635f6964" .
            "325f6e756c6c18ef0720012808123e0a196f75747075745f636861726163" .
            "74657269737469635f69643318082001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512270a1e6f75747075745f6368" .
            "6172616374657269737469635f6964335f6e756c6c18f007200128081245" .
            "0a206176675f6d696e757465735f756e74696c5f6e65775f6d656d626572" .
            "7368697018092001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c7565122e0a256176675f6d696e757465735f756e74696c" .
            "5f6e65775f6d656d626572736869705f6e756c6c18f1072001280812410a" .
            "1c636f6d6d756e6974795f62696e6172795f63617465676f72795f696418" .
            "0a2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c7565122a0a21636f6d6d756e6974795f62696e6172795f6361746567" .
            "6f72795f69645f6e756c6c18f2072001280812470a226f6e6c696e655f73" .
            "74617475735f696e73746561645f6f665f69735f6f6e6c696e65180b2001" .
            "280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c75" .
            "6512300a276f6e6c696e655f7374617475735f696e73746561645f6f665f" .
            "69735f6f6e6c696e655f6e756c6c18f30720012808123b0a177365706172" .
            "61746f725f696e5f6964656e745f76616c73180c2001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512250a1c73657061" .
            "7261746f725f696e5f6964656e745f76616c735f6e756c6c18f407200128" .
            "0822ce060a08526573706f6e736512380a106d6574615f696e666f726d61" .
            "74696f6e18022003280b321e2e6473746f72652e656e67696e652e4d6574" .
            "61496e666f726d6174696f6e12270a076d65737361676518032003280b32" .
            "162e6473746f72652e656e67696e652e4d657373616765123f0a03726f77" .
            "18042003280b32322e6473746f72652e656e67696e652e636f5f4765744e" .
            "65776573744d656d626572735f50752e526573706f6e73652e526f771a9d" .
            "050a03526f77120f0a06726f775f696418904e2001280512410a1c76616c" .
            "7565315f726573747269637465645f62795f7061747465726e18914e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "122f0a0962696e6172795f696418924e2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c756512410a1c76616c7565325f" .
            "726573747269637465645f62795f7061747465726e18934e2001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c756512390a13" .
            "636f6d6d756e6974795f6d656d6265725f696418944e2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565122b0a0676" .
            "616c75653318954e2001280b321a2e6473746f72652e76616c7565732e53" .
            "7472696e6756616c756512330a0d6f6e6c696e655f73746174757318964e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756512340a0c6d656d6265725f73696e636518974e2001280b321d2e64" .
            "73746f72652e76616c7565732e54696d657374616d7056616c7565122b0a" .
            "0676616c75653118984e2001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c7565122b0a0676616c75653218994e2001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c756512410a" .
            "1c76616c7565335f726573747269637465645f62795f7061747465726e18" .
            "9a4e2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c7565122d0a086e69636b6e616d65189b4e2001280b321a2e6473746f" .
            "72652e76616c7565732e537472696e6756616c7565122f0a0969735f6f6e" .
            "6c696e65189c4e2001280b321b2e6473746f72652e76616c7565732e426f" .
            "6f6c65616e56616c756542570a1b696f2e6473746f72652e656e67696e65" .
            "2e70726f636564757265735a38676f73646b2e6473746f72652e64652f65" .
            "6e67696e652f70726f636564757265732f636f5f4765744e65776573744d" .
            "656d626572735f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
