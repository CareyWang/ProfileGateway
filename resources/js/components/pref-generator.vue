<template>
  <div>
    <b-form>
      <b-form-group label="api_mode:">
        <b-form-radio-group v-model="common.api_mode">
          <b-form-radio value="true">true</b-form-radio>
          <b-form-radio value="false">false</b-form-radio>
        </b-form-radio-group>
      </b-form-group>

      <b-form-group label="api_access_token:" label-for="api_access_token">
        <b-form-input
          id="api_access_token"
          v-model="common.api_access_token"
          placeholder="Enter Your api access token"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="default_url:" label-for="default_url">
        <b-form-input
          id="default_url"
          v-model="common.default_url"
          placeholder="Default subscription url"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="enable_insert:">
        <b-form-radio-group v-model="common.enable_insert">
          <b-form-radio value="true">true</b-form-radio>
          <b-form-radio value="false">false</b-form-radio>
        </b-form-radio-group>
      </b-form-group>

      <b-form-group label="prepend_insert_url:">
        <b-form-radio-group v-model="common.prepend_insert_url">
          <b-form-radio value="true">true</b-form-radio>
          <b-form-radio value="false">false</b-form-radio>
        </b-form-radio-group>
      </b-form-group>

      <b-form-group label="exclude_remarks:" label-for="exclude_remarks">
        <b-form-input
          id="exclude_remarks"
          v-model="common.exclude_remarks"
          placeholder="exclude_remarks"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="include_remarks:" label-for="include_remarks">
        <b-form-input
          id="include_remarks"
          v-model="common.include_remarks"
          placeholder="include_remarks"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="enable_filter:">
        <b-form-radio-group v-model="common.enable_filter">
          <b-form-radio value="true">true</b-form-radio>
          <b-form-radio value="false">false</b-form-radio>
        </b-form-radio-group>
      </b-form-group>

      <b-form-group label="filter_script" label-for="filter_script">
        <b-form-textarea
          id="filter_script"
          v-model="common.filter_script"
          placeholder="filter_script"
          rows="3"
          max-rows="6"
        ></b-form-textarea>
      </b-form-group>

      <b-form-group label="default_external_config" label-for="default_external_config">
        <b-form-input
          id="default_external_config"
          v-model="common.default_external_config"
          placeholder="config/example_external_config.yml"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="base_path:" label-for="base_path">
        <b-form-input id="base_path" v-model="common.base_path" placeholder="base_path"></b-form-input>
      </b-form-group>

      <b-form-group label="clash_rule_base:" label-for="clash_rule_base">
        <b-form-input
          id="clash_rule_base"
          v-model="common.clash_rule_base"
          placeholder="clash_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="surge_rule_base:" label-for="surge_rule_base">
        <b-form-input
          id="surge_rule_base"
          v-model="common.surge_rule_base"
          placeholder="surge_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="surfboard_rule_base:" label-for="surfboard_rule_base">
        <b-form-input
          id="surfboard_rule_base"
          v-model="common.surfboard_rule_base"
          placeholder="surfboard_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="mellow_rule_base:" label-for="mellow_rule_base">
        <b-form-input
          id="mellow_rule_base"
          v-model="common.mellow_rule_base"
          placeholder="mellow_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="quan_rule_base:" label-for="quan_rule_base">
        <b-form-input
          id="quan_rule_base"
          v-model="common.quan_rule_base"
          placeholder="quan_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="quanx_rule_base:" label-for="quanx_rule_base">
        <b-form-input
          id="quanx_rule_base"
          v-model="common.quanx_rule_base"
          placeholder="quanx_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="loon_rule_base:" label-for="loon_rule_base">
        <b-form-input
          id="loon_rule_base"
          v-model="common.loon_rule_base"
          placeholder="loon_rule_base"
        ></b-form-input>
      </b-form-group>
      <b-form-group label="sssub_rule_base:" label-for="sssub_rule_base">
        <b-form-input
          id="sssub_rule_base"
          v-model="common.sssub_rule_base"
          placeholder="sssub_rule_base"
        ></b-form-input>
      </b-form-group>

      <b-form-group label="proxy_config:" label-for="proxy_config">
        <b-form-input id="proxy_config" v-model="common.proxy_config" placeholder="proxy_config"></b-form-input>
      </b-form-group>
      <b-form-group label="proxy_ruleset:" label-for="proxy_ruleset">
        <b-form-input id="proxy_ruleset" v-model="common.proxy_ruleset" placeholder="proxy_ruleset"></b-form-input>
      </b-form-group>
      <b-form-group label="proxy_subscription:" label-for="proxy_subscription">
        <b-form-input
          id="proxy_subscription"
          v-model="common.proxy_subscription"
          placeholder="proxy_subscription"
        ></b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">generator</b-button>
    </b-form>

    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ common }}</pre>
    </b-card>
  </div>
</template>

<script>
export default {
  name: "pref-generator",

  data: function () {
    return {
      common: {
        api_mode: true,
        api_access_token: this.getRandomStr(10),
        default_url: "",
        enable_insert: true,
        insert_url: "",
        prepend_insert_url: false,
        exclude_remarks: "(到期|剩余流量|时间|官网|产品)",
        include_remarks: "",
        enable_filter: false,
        filter_script: "",
        default_external_config: "",
        base_path: "base",
        clash_rule_base: "base/all_base.tpl",
        surge_rule_base: "base/all_base.tpl",
        surfboard_rule_base: "base/all_base.tpl",
        mellow_rule_base: "base/all_base.tpl",
        quan_rule_base: "base/all_base.tpl",
        quanx_rule_base: "base/all_base.tpl",
        loon_rule_base: "base/all_base.tpl",
        sssub_rule_base: "base/all_base.tpl",
        proxy_config: "NONE",
        proxy_ruleset: "NONE",
        proxy_subscription: "NONE",
        append_proxy_type: false,
      },
    };
  },

  methods: {
    getRandomStr(len) {
      return Math.random().toString(36).slice(-len)
    }
  }
};
</script>
